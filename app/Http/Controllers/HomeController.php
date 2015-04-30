<?php 

namespace App\Http\Controllers;
use App\HomeEntry;

class HomeController extends Controller {
  protected $layout='master';
  
	public function index(){
    $entries = HomeEntry::all();
		return view('index', ['page' => 'index', 'entries' => $entries]);
	}
	public function portfolio(){
		return view('portfolio',['page' => 'portfolio']);
	}
	public function contact(){
		return view('contact',['page' => 'contact']);
	}

}
