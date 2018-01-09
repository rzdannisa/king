<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\sendemail;
use Mail;

class InviteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');
		return view('invitepeople')->with('user',$user);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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

	public function sendEmail()
	{
	    $post = new sendemail;
	    $post->id_user = \Auth::user()->id;
	    $post->name_people = Input::get('name_people');
	    $post->email_address = Input::get('email_address');
	    $post->save();

	    $task_book =\DB::select('select task_book.id, task_book.title_task_book, task_book.id_user, task.title_task, task.priority, task.progress, task.start, task.finish from task_book inner join task on task_book.id = task.id_task_book where task_book.id_user='.\Auth::user()->id.'');
		
	 
	    Mail::send('pdf', ['task_book' => $task_book],
		function($message){
	        $message->to(Input::get('email_address'), Input::get('name_people'))->subject('This All My Task');
		});
	 
	    return redirect(url('/sendemail'))->with('message', 'Email sent!');
	}

}
