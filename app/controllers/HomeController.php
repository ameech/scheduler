<?php

class HomeController extends BaseController {

	/**
	 * Renders out the homepage
	 * 
	 * @return object
	 */
	public function index()
	{
        // Render View
		return View::make('home.index');
	}
}