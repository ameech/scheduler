<?php

class AuthController extends BaseController {

    /**
     * Renders out the sign in form.
     * 
     * @return object
     */
    public function signin()
    {
        // Render View
        return View::make('auth.signin');
    }

    /**
     * Renders out the sign up form.
     * 
     * @return object
     */  
    public function signup()
    {
        // Render View
        return View::make('auth.signup');
    }
}