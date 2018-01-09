<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\Users;
use App\Invite;

class BerandaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');
		return \View::make('beranda')->with('user',$user);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function calendar()
	{
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');
		$events = \DB::table('events')->where('id_user',\Auth::user()->id)->get();
		return view('clndr')->with('events', $events)->with('user',$user);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function recaptask()
	{
		$task = \DB::select('select id_task_book from task where id_user='.\Auth::user()->id.'');
		$task_book =\DB::select('select task_book.id, task_book.title_task_book, task_book.id_user, task.title_task, task.priority, task.progress, task.start, task.finish from task_book inner join task on task_book.id = task.id_task_book where task_book.id_user='.\Auth::user()->id.'');
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');
		
		return view('recaptask')->with('task', $task)->with('task_book', $task_book)->with('user',$user);
	}

	public function activities()
	{
		return view('activities');
	}

	public function home()
	{
		$user = \DB::select('select id, first_name, last_name, gender, email, profile_photo from users where id='.\Auth::user()->id.'');
		
		return view('home')->with('user', $user);
	}

	public function log()
	{
		return view('login');
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
		//
	}

}