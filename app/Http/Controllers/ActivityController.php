<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\task;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class ActivityController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$taskbook = \DB::select('select id as id, title_task_book as title_task_book from task_book where id_user='.\Auth::user()->id.'');
		$taskun = \DB::select('select id as id, title_task from task where progress = "Uncompleted" AND id_user='.\Auth::user()->id.'');
		$taskco = \DB::select('select id as id, title_task from task where progress = "Completed" AND id_user='.\Auth::user()->id.'');
		$taskpo = \DB::select('select id as id, title_task from task where progress = "In the process" AND id_user='.\Auth::user()->id.'');
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');
		$task = \DB::select('select id as id, title_task as title_task from task where id_user='.\Auth::user()->id.'');
		return \View::make('activities')->with('taskbook',$taskbook)->with('taskun',$taskun)->with('user',$user)->with('taskco',$taskco)->with('taskpo',$taskpo)->with('task',$task);
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

}
