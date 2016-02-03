<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ItemModel;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;
use Illuminate\Support\Facades\Input;
use Mail;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	function index(){
		// $item = new itemModel;
		//    $item->name = "ali";
		//    $item->image = "ali.jpg";
		//    $item->sale_price = "58";
		//    $item->purchase_price = "49";
		//    $item->save();exit;
		$item = DB::table('item')->paginate(8);
		//$student = ["Muhammad","Riaz","Umer","Aman","Bilal","Masood","Saad","Eijaz","Zubail","Murtaza","Arsalan","Amir","Ashfaq"];
		//$student = [];
		return view("frontend.mainpage",compact("item"));
	}
	public function AllItem(){
		$item = DB::table('item')->paginate(6);
		return view('front-end.layout',compact("item"));
	}
	public function detail($id){
		$row = DB::table('images')->where('item_id',$id)->get();
		return view('front-end.detail')->with('row',$row);
	}
	public function ItemDetail($id){

		$data['row'] = DB::table('images')->where('item_id',$id)->get();
		$data['pro'] = DB::table('item')->where('id',$id)->first();
		//return view("frontend.layouts.detail",$row);
		return view("frontend.detail_item")->with('data',$data);
	}

	public function ItemForm($id){
		return view('frontend.item_form')->with('id',$id);
	}

	public function ItemOrder(Request $request){
		$post = $request->all();
		//var_dump($post);exit;

		$errors         = array();  	// array to hold validation errors
		$data 			= array(); 		// array to pass back data

		if (empty($post['name']))
			$errors['name'] = 'Name is required must.';

		if (empty($post['email']))
			$errors['email'] = 'Email is required.';

		if (empty($post['address']))
			$errors['address'] = 'address is required.';

		if (empty($post['mobile']))
			$errors['mobile'] = 'mobile is required.';

		if ( ! empty($errors)) {

			$data['success'] = false;
			$data['errors']  = $errors;
		} else {


			$submitdata =array(
			'item_id' => $post['item_id'],
			'name' => $post['name'],
			'mobile' => $post['mobile'],
			'email' => $post['email'],
			'address' => $post['address'],

		);

		$row = DB::table('order')->insert($submitdata);

		if($row > 0){

			Mail::send('frontend.mailer', ['data' => $submitdata], function($message)
			{
				$message->to('syedriazahmed@live.com', 'John Smith')->subject('Welcome!');
			});

			//\Session::flash('message','order submit');
			//return  redirect('/');
		}
			$data['success'] = true;
			$data['message'] = 'order submit!';
		}

		return $data;

		
	}



}
