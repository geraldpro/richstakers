<?php

namespace App\Http\Controllers;

use App\User as User;
use Validator;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller{

//Get user login page
 public function Login(){
  return view('users.login');
}


// Get user registration page
public function register(){
  return view('users.register');
}


/****Register New User******/

public function store(Request $request){

//get data input from a user
$data = $request->all();
$user = new User;
$validator = Validator::make($data, [
'first_name' => 'required',
'last_name' => 'required',
'email' => 'required|unique:users',
'password' => 'required|min:6',
]);

if($validator->passes()){
  $data['password'] = bcrypt($data['password']);
	$user->fill($data);
	$user->save();

return redirect('login')->with('status','You have successfully registered. You may now login.');
}
return redirect('register')->with('msg','You need to fill all your details properly.');
}


/****Login User******/
public function authenticate(Request $request){

  //authenticate input parameters
	  $data = $request->all();

   if(Auth::attempt(array('email'=>$data['email'], 'password'=>$data['password']))){

     $user = Auth::user();


     //if(!$user->isAdmin){
       return redirect('dashboard/index');
     //}

      return redirect('/');

    }
    return redirect('login')->With('info','Invalid Login details, Please try again');
}

// Logout a user
public function logout(){

 Auth::logout();
 return redirect('/');

}

// Retrieve user profile
public function profile(){

$user = Auth::user();
return view('users.user-profile')->withUser($user);

}

// Update user profile
public function update(Request $request){
$user = Auth::user();

$this->validate($request,[
 'first_name'=>'required',
 'last_name' =>'required',
 'email' =>'required',

]);

Auth::user()->update([
'first_name'=>$request->input('first_name'),
'last_name'=>$request->input('last_name'),
'email'=>$request->input('email')
 ]);


return redirect('/dashboard/index');
}




}













?>
