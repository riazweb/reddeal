<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Guzzle\Tests\Plugin\Redirect;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;



class ImageController extends Controller {

	public function upload()
	{
		return view('page.imageupload');
	}
	public function store(Request $request)
	{
		$image = new Image();
		$this->validate($request, [
			'title' => 'required',
			'image' => 'required'
		]);
		$image->title = $request->title;
		$image->description = $request->description;
		if($request->hasFile('image')) {
			$file = Input::file('image');
			//getting timestamp
			//$timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

			$name = $file->getClientOriginalName();

			$image->filePath = $name;

			$file->move(public_path().'/images/', $name);
		}
		$image->save();
		\Session::flash('message','Image Uploaded Successfully');
		return redirect('item-view');
		//return $this->create()->with('success', 'Image Uploaded Successfully');
	}

	public function show(Request $request)
	{
		$images = Image::all();
		return view('page.showLists', compact('images'));

	}

}
