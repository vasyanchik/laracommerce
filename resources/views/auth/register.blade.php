<!-- resources/views/auth/register.blade.php -->
@extends('main')
@section('content')
    <h1>Registration <small>Please, feel free to register</small></h1>
    <hr>

    {{--<form method="POST" action="/auth/register">--}}
    {!! Form::open() !!}
        <!-- Name Form Input -->
        <div class="form-grop">
            {!!  Form::label('name', 'Name:') !!}
            {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
        </div>

        <!-- Email Form Input -->
        <div class="form-grop">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
        </div>

        <!-- Password Form Input -->
        <div class="form-grop">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <!-- Confirm password Form Input -->
        <div class="form-grop">
            {!! Form::label('password_confirmation', 'Confirm password:') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>

        <!-- Register Form Input -->
        <div class="form-group">
            {!! Form::submit('Register', ['class' => 'btn btn-primary form-control']) !!}
        </div>

    {!! Form::close() !!}
    @include('errors.list')
@endsection