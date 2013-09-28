@extends('layouts.app')

@section('content')
    <div class="content sign-in col-lg-6 col-lg-offset-3">
        <h1>Sign In</h1>
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

            <!-- Submit -->
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </form>
    </div>
@endsection