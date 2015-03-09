<?php namespace App\Http\Controllers;

use Config;

class AllofhomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('web.index');
	}

	public function about()
	{
		return view('web.about');
	}

	public function about_ex()
	{
		return view('web.aboutex');
	}

	public function about_me()
	{
		return view('web.aboutme');
	}

	public function teamlist()
	{
		return view('web.teamlist');
	}

	public function teamgrid()
	{
		return view('web.teamgrid');
	}

	public function teammemb()
	{
		return view('web.teammemb');
	}

	public function contact()
	{
		return view('web.contact');
	}
	
	public function pricing()
	{
		return view('web.pricing');
	}

	public function pricing_table()
	{
		return view('web.pricing_table');
	}

	public function timeline()
	{
		return view('web.timeline');
	}

	public function timelineleft()
	{
		return view('web.timeleft');
	}

	public function timelineright()
	{
		return view('web.timeright');
	}

	public function timelinestacked()
	{
		return view('web.timelinestacked');
	}

	public function custumers()
	{
		return view('web.custumers');
	}

	public function features()
	{
		return view('web.features');
	}

	public function login()
	{
		return view('web.login');
	}

	public function signup()
	{
		return view('web.signup');
	}

	public function starter()
	{
		return view('web.starter');
	}

	public function index_boxed()
	{
		return view('web.index_boxed');	
	}

	public function blog()
	{
		return view('web.blog');	
	}

	public function blogleft()
	{
		return view('web.blogleft');	
	}

	public function blogtimeline()
	{
		return view('web.blogtimeline');	
	}

	public function bloggrid()
	{
		return view('web.blogtimeline');	
	}

	public function blogpost()
	{
		return view('web.blogpost');	
	}

	public function blogvdo()
	{
		return view('web.blogpostvdo');	
	}

	public function blogpostslide()
	{
		return view('web.blogpostslide');	
	}

	public function blogpostaudio()
	{
		return view('web.blogpostaudio');	
	}

	public function sliderdefault()
	{
		return view('web.slider_default');	
	}
}
