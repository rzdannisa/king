<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\task;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TaskController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$taskbook = \DB::select('select id as id, title_task_book as title_task_book from task_book where id_user='.\Auth::user()->id.'');
		$task = \DB::select('select id as id, title_task as title_task, priority, progress, finish, start, content from task where id_user='.\Auth::user()->id.'');
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');

		return \View::make('task')->with('taskbook',$taskbook)->with('task',$task)->with('user',$user);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$post = new task;
		$post->title_task = Input::get('title_task');
		$post->id_user = \Auth::user()->id;
        $post->priority = Input::get('priority');
        $post->id_task_book = Input::get('id_task_book');
        $post->start = Input::get('start');
        $post->finish = Input::get('finish');
        $post->content = Input::get('content');
        $post->progress = "Uncompleted";
        $post->slug = str_slug(Input::get('title_task'));

        $post->save();

		return redirect(url('/task'));
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
		
		$task_book =\DB::select('select task_book.id, task_book.title_task_book, task_book.id_user from task_book inner join task on 
			task_book.id = task.id_task_book where task_book.id_user='.\Auth::user()->id.' AND task.id = ?',[$id]);

		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');

		
		$data = array('data'=>task::find($id));
		return view('viewtask')->with($data)->with('taskbook',$taskbook)->with('task',$task)->with('task_book', $task_book)->with('user',$user);
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
		$task = \DB::select('select id as id, title_task as title_task, id_task_book as itb, priority, progress, finish, start, content from task where id_user='.\Auth::user()->id.'');
		$data = array('data'=>task::find($id));
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');

		return view('edittask')->with($data)->with('taskbook',$taskbook)->with('task',$task)->with('user',$user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$post = task::find(Input::get('id'));
		$post->title_task = Input::get('title_task');
		$post->id_user = \Auth::user()->id;
        $post->priority = Input::get('priority');
        $post->id_task_book = Input::get('id_task_book');
        $post->start = Input::get('start');
        $post->finish = Input::get('finish');
        $post->content = Input::get('content');
        $post->progress = Input::get('progress');
        $post->slug = str_slug(Input::get('title_task'));

        $post->save();

		return redirect(url('/task'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		task::find($id)->delete();
		return redirect(url('/task'));
	}

	public function showpdf()
	{
		$task_book =\DB::select('select task_book.id, task_book.title_task_book, task_book.id_user, task.title_task, task.priority, task.progress, task.start, task.finish from task_book inner join task on task_book.id = task.id_task_book where task_book.id_user='.\Auth::user()->id.'');

		if(!empty($task_book)) {
			
			$data = array('task_book'=>$task_book);
			$pdf = \PDF::loadView('pdf', $data);

			return $pdf->stream();
			// return $pdf->download($slug.',pdf'); //download
		}
		else{
			return redirect(url());
		}
		
	}

	public function downloadtaskpdf()
	{	
		$task_book =\DB::select('select task_book.id, task_book.title_task_book, task_book.id_user, task.title_task, task.priority, task.progress, task.start, task.finish from task_book inner join task on task_book.id = task.id_task_book where task_book.id_user='.\Auth::user()->id.'');
		if(!empty($task_book)) {
			
			$data = array('task_book'=>$task_book);
			$pdf = \PDF::loadView('pdf', $data);
			return $pdf->download("All Task".'.pdf');
		}
		else{
			return redirect(url());
		}
	}

}
