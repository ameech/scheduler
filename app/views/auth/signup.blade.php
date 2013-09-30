@extends('layouts.app')

@section('content')
    <div class="content sign-up col-lg-6 col-lg-offset-3">
        <h1>Sign Up</h1>
        {{ Form::open(array('url' => 'create-user')) }}
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

            <!-- Password Confirmation -->
            <div class="form-group <?php if ($errors->first('password_confirmation')): ?>has-error<?php endif; ?>">
                {{ Form::label('password_confirmation', 'Password Confirmation') }}
                {{ Form::password('password_confirmation', array('id' => 'password_confirmation', 'class' => 'form-control', 'placeholder' => 'Password Confirmation')) }}
                <div class="help-block">{{ $errors->first('password_confirmation') }}</div>
            </div>

            <!-- Submit -->
            {{ Form::submit('Sign Up', array('class' => 'btn btn-success btn-block')) }}
        {{ Form::close() }}
    </div>
@endsection