<?php

namespace App\Http\Controllers;

use App\Admin as Admin;
use Validator;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller{

//Get user login page
 public function aLogin(){
  return view('admin.alogin');
}


// Login authenticated admin
public function authenticate(Request $request){
  dd($request->all());
  //authenticate input parameters
	  $input = $request->all();

   if(Auth::attempt(array('email'=>$input['email'], 'password'=>$input['password']))){
     //$admin = Auth::admins();
     //$admin->save();
     return redirect('/');
    }
    return redirect('login/user')->With('info','Invalid Login details, Please try again');
}


// Logout a user
public function logout(){

 Auth::logout();
 return redirect('/');

}




}













?>
