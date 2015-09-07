<!-- resources/views/auth/login.blade.php -->
@extends('main')
@section('content')
    <h1>Please login</h1>
    <hr>
    {!! Form::open()  !!}
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

        <!-- Remember Form Input -->
        <div class="form-grop">
            {!! Form::label('remember', 'Remember Me:') !!}
            {!! Form::checkbox('remember', old('remember'), ['class' => 'form-control']) !!}
        </div>

        <!-- Login Form Input -->
        <div class="form-group">
            {!! Form::submit('Login', ['class' => 'btn btn-primary form-control']) !!}
        </div>

    {!! Form::close() !!}
    @include('errors.list')
@endsection