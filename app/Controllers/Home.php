<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return $this->slice->view('welcome_message');
	}

	//--------------------------------------------------------------------

}
