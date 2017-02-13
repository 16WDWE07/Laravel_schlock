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
		$data = [];
		$data['username'] = "sindhu";
		$data['email']="sindhuss@gmail.com";

		return view('about')->withData($data);
	}
}