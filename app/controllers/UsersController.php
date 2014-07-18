<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{		
		return View::make('users.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$method = Request::method();

   
		$marital_status = array('Single','Divorced', 'Complicated','Engaged','Widow','Widower');
		return View::make('users.create', compact('marital_status'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//captur form data
		
	   //format date of birth toy m d
         $dob = Input::get('dob');
		 $datestring = $dob['year'] .'-'. $dob['month'] .'-'. $dob['day'];
		//mergethe date string back to load
         Input::merge(['dob' => $datestring]);

         //capture form date
         $payload = Input::all();

		//validation
		 $validation = Validator::make($payload, User::$rules);

		 if($validation->passes())
		 {
		   $user = User::Create($payload);
		   return Redirect::route('user-show', array($user->id));	
		 }
		 else{
		 	return Redirect::back()->withErrors($validation);
		 }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$users = User::find($id);
		// $users = DB::table('users');
		// $users = User::all();
		echo "Name:".$users->names." <br> DOB:".$users->dob;
		// return View::make('users.show', compact($users));

		

		// var_dump($user->names);
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
