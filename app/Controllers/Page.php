<?php 

namespace App\Controllers;

class Page extends BaseController {

	public function about() {

		return view('aboutus');
	}

	public function currentweather() {

		return view('currentweather');

	}

	public function index(){
		
	return view('index');

	}
}
 
 ?>