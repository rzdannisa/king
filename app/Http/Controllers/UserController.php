<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$data = array('data'=>Users::find($id));
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');
		return view('profile')->with($data)->with('user',$user);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$data = array('data'=>Users::find($id));
		$user = \DB::select('select id, first_name, last_name, gender, profile_photo from users where id='.\Auth::user()->id.'');
		$gen = \DB::select('select gender from users where id='.\Auth::user()->id.'');
		return view('editprofile')->with($data)->with('user',$user)->with('gen',$gen);
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
	public function update()
	{
		$post = Users::find(Input::get('id'));
		$post->first_name = Input::get('first_name');
		$post->last_name = Input::get('last_name');
        $post->gender = Input::get('gender');
        $post->email = Input::get('email');
        $post->password = Input::get('password');

        if(Input::hasFile('profile_photo')){
			$profile_photo = date("YmdHis")
			.uniqid()
			."."
			.Input::file('profile_photo')->getClientOriginalExtension();
		
			Input::file('profile_photo')->move('images',$profile_photo);
			$post->profile_photo = $profile_photo;
		}
        $post->save();

		return redirect(url('/home'));
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
