<?php

namespace App\Controllers;

class SiteController extends BaseController
{
	public function index()
	{
		return view('site/index');
	}
}
