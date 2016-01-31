<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ItemModel;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;
use Illuminate\Support\Facades\Input;
use Validator;
class AdminController extends Controller {

	function index(){
    	$data['title_view'] = array('title' => 'Admin Dashboard | Form','page_title' => 'Dashboard' );
    	return view('admin.dashboard',$data);
    }
    function delete($id){
    	$i = DB::table('item')->where('id',$id)->delete();
    	if ($i) {
    		\Session::flash('message','Record have been Delete success fully');
			return redirect('item-view');
    	}
    }
    function edit($id){
    	$row = DB::table('item')->where('id',$id)->first();
    	return view("admin.item_form-edit")->with('row',$row);
    }

	public function ProductDetail($id){
		$row = DB::table('item')->where('id',$id)->first();
		return view("admin.item_detail_form")->with('row',$row);
	}

    function viewProduct(){
    	//$data = ItemModel::All();
    	$data = DB::table('item')->paginate(10);
    	//$data = array('title' => 'Admin Dashboard | POST', );
    	//return view('admin.post',$data);
    	return view("admin.view_product",compact("data"));
    }

    function itemForm(){
    	$data['title_view'] = array('title' => 'Admin Dashboard | Form','page_title' => 'Item Form' );
    	return view("admin.item_form",$data);
    }

    function itemSave(Request $request){
    	$post = $request->all();
    	$v = $this->validate($request, [
        'product_name' => 'required',
        'product_price' => 'required',
		'realprice' => 'required',
        'product_qty' => 'required',
		'image' => 'required',
    	]);
    	//var_dump($v->fails());exit;
    	if ($v != null) {
        return redirect()->back()->withErrors($v->errors());
    } else {
//			$file = Input::file('image');
//			$name = $file->getClientOriginalName();
			$extension = Input::file('image')->getClientOriginalName(); // getting image extension
			$name = rand(11111,99999).'--'.$extension; // renameing image

			$data = array(
    			'name' => $post['product_name'],
		        'real_price' => $post['realprice'],
				'sale_price' => $post['product_price'],
		        'quantity' => $post['product_qty'],
				'image' => $name,
    			);
			//var_dump($data);exit;
			Input::file('image')->move(public_path().'/images/', $name);
			$i = DB::table('item')->insert($data);
			if ($i > 0) {
				\Session::flash('message','Record have been save success fully');
				return redirect('item-view');
			}
    	}
    	
    }

	public function multiple_upload(Request $request) {
		// getting all of the post data
		$post = $request->all();
		$id = $post['id'];
		$files = Input::file('images');
		// Making counting of uploaded images
		$file_count = count($files);
		// start count how many uploaded
		$uploadcount = 0;
		foreach($files as $file) {
			$rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
			$validator = Validator::make(array('file'=> $file), $rules);
			if($validator->passes()){
				$destinationPath = 'uploads';
				$filename = $file->getClientOriginalName();
				$upload_success = $file->move($destinationPath, $filename);
				$i = DB::table('images')->insert(array('filepath'=> $filename,'item_id' => $id));
				$uploadcount ++;
			}
		}
		if($uploadcount == $file_count){
			\Session::flash('success', 'Upload successfully');
			return redirect('item-view');
		}
		else {
			return Redirect::to('upload')->withInput()->withErrors($validator);
		}
	}

    function itemUpdate(Request $request){
    	$post = $request->all();
    	$v = $this->validate($request, [
        'product_name' => 'required',
        'product_price' => 'required',
        'product_qty' => 'required',
    	]);
    	//var_dump($v->fails());exit;
    	if ($v != null) {
        return redirect()->back()->withErrors($v->errors());
    } else {
			$file = Input::file('image');
			if($file != null){ $name = $file->getClientOriginalName();}
			elseif($file == null){ $name = $post['image_name']; }

    		$data = array(
    			'name' => $post['product_name'],
		        'sale_price' => $post['product_price'],
		        'quantity' => $post['product_qty'],
				'image' => $name,
    			);
			if($file != null){ $file->move(public_path().'/images/', $name); }
				echo $i = DB::table('item')->where('id', $post['id'])->update($data);


				\Session::flash('message','Record have been Updated success fully');
				return redirect('item-view');

    	}
    	
    }

}
