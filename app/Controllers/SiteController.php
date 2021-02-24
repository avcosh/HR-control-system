<?php

namespace App\Controllers;

class SiteController extends BaseController
{
	public function index()
	{
		$data['meta_title'] = 'Home page';
		return view('site/index', $data);
	}
}
