<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class HomeController extends Controller{

/**View Index**/

public function index()
{
return view('index');
}

public function dashboard()
{
return view('dashboard.index');
}

public function flot(){

	return view('dashboard.flot');
}

public function morris(){
 return view('dashboard.morris');
}


public function tables(){

	return view('dashboard.tables');
}

public function forms(){

	return view('dashboard.forms');
}

public function panelswells(){

	return view('dashboard.panels-wells');
}

public function buttons(){

	return view('dashboard.buttons');
}

public function typography(){

	return view('dashboard.typography');
}



}
