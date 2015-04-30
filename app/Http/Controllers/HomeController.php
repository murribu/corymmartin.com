<?php 

namespace App\Http\Controllers;
use App\HomeEntry;
use App\PortfolioEntry;

class HomeController extends Controller {
  protected $layout='master';
  
	public function index(){
    $entries = HomeEntry::all();
		return view('index', ['page' => 'index', 'entries' => $entries]);
	}
	public function portfolio(){
    $entries = PortfolioEntry::orderBy('created_at','desc')->get();
		return view('portfolio',['page' => 'portfolio', 'entries' => $entries]);
	}
	public function contact(){
		return view('contact',['page' => 'contact']);
	}

}
