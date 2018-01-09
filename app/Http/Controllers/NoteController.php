<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\note;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;


class NoteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$notes = \DB::select('select id as id, title_notes as title_notes from notes where id_user='.\Auth::user()->id.'');
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');
		return \View::make('note')->with('notes',$notes)->with('user',$user);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$post = new note;
		$post->title_notes= Input::get('title_notes');
		$post->id_user = \Auth::user()->id;
        $post->content = Input::get('content');
        $post->slug = str_slug(Input::get('title_notes'));

        $post->save();

		return redirect(url('/note'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$taskbook = \DB::select('select id as id, title_task_book as title_task_book from task_book where id_user='.\Auth::user()->id.'');
		$task = \DB::select('select id as id, title_task as title_task from task where id_user='.\Auth::user()->id.'');
		$notes= \DB::select('select id as id, title_notes as title_notes from notes where id_user='.\Auth::user()->id.'');
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');
		$data = array('data'=>note::find($id));
		return view('viewnote')->with($data)->with('taskbook',$taskbook)->with('task',$task)->with('notes', $notes)->with('user',$user);
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
		$data = array('data'=>note::find($id));
		$notes= \DB::select('select id as id, title_notes as title_notes from notes where id_user='.\Auth::user()->id.'');
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');
		return view('editnote')->with($data)->with('notes', $notes)->with('user',$user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$post = note::find(Input::get('id'));
		$post->title_notes= Input::get('title_notes');
		$post->id_user = \Auth::user()->id;
        $post->content = Input::get('content');
        $post->slug = str_slug(Input::get('title_notes'));

        $post->save();

		return redirect(url('/note'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		note::find($id)->delete();
		return redirect(url('/note'));
	}

}
