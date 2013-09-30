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

    /**
     * Creates a new user if valid
     *
     * @return mixed
     */
    public function createUser()
    {
        // Validation Rules
        $rules = [
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ];

        // Check if valid
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            Input::flash();
            return Redirect::to('signup')->withErrors($validator);
        }

        // Create User
        try {
            $user = Sentry::register(array(
                'email'    => Input::get('email'),
                'password' => Input::get('password'),
            ), true);
        } catch (Cartalyst\Sentry\Users\UserExistsException $e) {
            return Redirect::to('signup')->with("error-message", "User with this login already exists.");
        }

        // Log the user in
        Sentry::login($user, false);

        // Redirect to the schedule
        return Redirect::to('schedule')->with("message", "You've successfully created a user!");
    }
}