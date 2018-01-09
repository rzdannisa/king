<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\file;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class FileController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$files = \DB::select('select id as id, title_files as title_files from files where id_user='.\Auth::user()->id.'');
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');
		return \View::make('file')->with('files',$files)->with('user',$user);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$post = new file;
		$post->title_files= Input::get('title_files');
		$post->id_user = \Auth::user()->id;
        $post->content = Input::get('content');
        $post->slug = str_slug(Input::get('title_files'));

		//upload file
		if(Input::hasFile('file')){
			$file = date("YmdHis")
			.uniqid()
			."."
			.Input::file('file')->getClientOriginalExtension();
		
			Input::file('file')->move('files',$file);
			$post->file = $file;
		}

		$post->save();

		return redirect(url('/file'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$files = \DB::select('select id as id, title_files as title_files from files where id_user='.\Auth::user()->id.'');
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');
		$data = array('data'=>file::find($id));
		return \View::make('viewfile')->with('files',$files)->with($data)->with('user',$user);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		file::find($id)->delete();
		return redirect(url('/file'));
	}

}
