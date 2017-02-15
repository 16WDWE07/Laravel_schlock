<?php
namespace App\Http\Controllers;

class PageController extends Controller
{
	public function getIndex(){
		$title = "Schlocktoberfest";
		$caption = "The best worst film festival";

		return view('welcome')->withTitle($title)->withCaption($caption);
	}
	public function getAbout(){

		return view('about');
	}
	public function getMovies(){

		return view('movies');
	}
	public function getContact(){
		$data = [];
		$data['username'] = "sindhu";
		$data['email']="sindhuss@gmail.com";

		return view('contact')->withData($data);
	}
}