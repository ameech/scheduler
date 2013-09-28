@extends('layouts.app')

@section('content')
    <div class="content sign-up col-lg-6 col-lg-offset-3">
        <h1>Sign Up</h1>
        <form role="form">
            <!-- Email -->
            <div class="form-group">
                <label for="email-address">Email address</label>
                <input type="email" class="form-control" id="email-address" placeholder="Enter email">
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>

            <!-- Password Confirmation -->
            <div class="form-group">
                <label for="password-confirmation">Password Confirmation</label>
                <input type="password" class="form-control" id="password-confirmation" placeholder="Password Confirmation">
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-success btn-block">Sign Up</button>
        </form>
    </div>
@endsection