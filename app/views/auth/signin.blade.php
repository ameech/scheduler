@extends('layouts.app')

@section('content')
    <div class="content sign-in col-lg-6 col-lg-offset-3">
        @if (Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif

        <h1>Sign In</h1>

        @if (Session::has('error-message'))
        <div class="alert alert-danger">{{ Session::get('error-message') }}</div>
        @endif
        {{ Form::open(array('url' => 'authenticate')) }}
            <!-- Email -->
            <div class="form-group <?php if ($errors->first('email')): ?>has-error<?php endif; ?>">
                {{ Form::label('email', 'Email address') }}
                {{ Form::text('email', Input::old('email'), array('id' => 'email-address', 'class' => 'form-control', 'placeholder' => 'Enter email')) }}
                <div class="help-block">{{ $errors->first('email') }}</div>
            </div>

            <!-- Password -->
            <div class="form-group <?php if ($errors->first('password')): ?>has-error<?php endif; ?>">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password')) }}
                <div class="help-block">{{ $errors->first('password') }}</div>
            </div>

            <!-- Submit -->
            {{ Form::submit('Sign Up', array('class' => 'btn btn-success btn-block')) }}
        {{ Form::close() }}
    </div>
@endsection