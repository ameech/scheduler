@extends('layouts.app')

@section('content')
    <div class="content sign-in col-lg-8 col-lg-offset-2">
        <h1>Reminders</h1>

        @if (Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif

        <div class="panel panel-default">
            <div class="panel-heading"><strong>Create a New Reminder</strong></div>
            <div class="panel-body">
            {{ Form::open(['url' => 'create-reminder']) }}
                <!-- Description -->
                <div class="form-group <?php if ($errors->first('description')): ?>has-error<?php endif; ?>">
                    {{ Form::label('description', 'Description') }}
                    {{ Form::text('description', Input::old('description'), ['id' => 'description', 'class' => 'form-control', 'placeholder' => 'Enter a Description', 'maxlength' => 140]) }}
                    <div class="help-block">{{ $errors->first('description') }}</div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- Date -->
                        <div class="form-group <?php if ($errors->first('date')): ?>has-error<?php endif; ?>">
                            {{ Form::label('date', 'Date') }}
                            {{ Form::text('date', Input::old('date'), ['id' => 'date', 'class' => 'form-control', 'placeholder' => 'Enter a Date']) }}
                            <div class="help-block">{{ $errors->first('date') }}</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Description -->
                        <div class="form-group <?php if ($errors->first('time')): ?>has-error<?php endif; ?>">
                            {{ Form::label('time', 'Time') }}
                            {{ Form::text('time', Input::old('time'), ['id' => 'time', 'class' => 'form-control', 'placeholder' => 'Enter a Time']) }}
                            <div class="help-block">{{ $errors->first('time') }}</div>
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                {{ Form::submit('Create Reminder', ['class' => 'btn btn-success btn-block']) }}
            {{ Form::close() }}
            </div>
        </div>

        <!-- Reminders -->
        <div class="list-group">
        @foreach ($reminders as $reminder)
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">{{ $reminder->description  }}</h4>
                <p class="list-group-item-text">Date: {{ $reminder->date }}</p>
                <p class="list-group-item-text">Time: {{ $reminder->time }}</p>
                {{ Form::open(['url' => 'delete-reminder']) }}
                {{ Form::hidden('reminder-id', $reminder->id) }}
                {{ Form::submit('Delete Reminder', ['class' => 'btn btn-danger pull-right delete-reminder']) }}
                {{ Form::close() }}
                <div class="clearfix"></div>
            </a>
        @endforeach
        </div>
    </div>
@endsection
