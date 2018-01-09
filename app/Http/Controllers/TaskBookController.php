<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Illuminate\Http\Request;
use App\task_book;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class TaskBookController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$taskbook = \DB::select('select id as id, title_task_book as title_task_book from task_book where id_user='.\Auth::user()->id.'');
		$task = \DB::select('select id as id, title_task as title_task from task where id_user='.\Auth::user()->id.'');
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');
		return \View::make('taskbook')->with('taskbook',$taskbook)->with('task',$task)->with('user',$user);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$post = new task_book;
		$post->title_task_book = Input::get('title_task_book');
		$post->id_user = \Auth::user()->id;
        $post->priority = Input::get('priority');
        $post->start = Input::get('start');
        $post->finish = Input::get('finish');
        $post->content = Input::get('content');
        $post->progress = "Uncompleted";
        $post->slug = str_slug(Input::get('title_task_book'));

        $post->save();

		return redirect(url('/taskbook'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$taskbook = DB::table('task_book')->join('task', 'task_book.id', '=', 'task.id_task_book')->select('task_book.id as idtaskbook', 'task.id as idtask', 
			'title_task_book', 'title_task', 'task_book.start as tbstart', 'task_book.finish as tbfinish', 
			'task_book.priority as tbpriority', 'task_book.progress as tbprogress', 
			'task_book.content as tbcontent from task_book')->get();
		$task = \DB::select('select id as id, title_task as title_task from task where id_user='.\Auth::user()->id.'');
		$data = array('data'=>task_book::find($id));
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');

		return \View::make('viewtaskbook')->with('taskbook',$taskbook)->with('user',$user)->with('task',$task);
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
		$taskbook = \DB::select('select id as id, title_task_book as title_task_book from task_book where id_user='.\Auth::user()->id.'');
		$task = \DB::select('select id as id, title_task as title_task from task where id_user='.\Auth::user()->id.'');
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');
		$data = array('data'=>task_book::find($id));
		return \View::make('edittaskbook')->with('taskbook',$taskbook)->with('task',$task)->with($data)->with('user',$user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$post = task_book::find(Input::get('id'));;
		$post->title_task_book = Input::get('title_task_book');
		$post->id_user = \Auth::user()->id;
        $post->priority = Input::get('priority');
        $post->start = Input::get('start');
        $post->finish = Input::get('finish');
        $post->content = Input::get('content');
        $post->progress = "Uncompleted";
        $post->slug = str_slug(Input::get('title_task_book'));

        $post->save();

		return redirect(url('/taskbook'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		task_book::find($id)->delete();
		return redirect(url('/taskbook'));
	}

}
