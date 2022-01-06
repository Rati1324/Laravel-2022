@extends('layouts.app')
@section('title') Register @endsection
@section('content_inner')
<h2>Welcome to the registration page!</h2>
<form action="{{ route('register') }}" method="post" autocomplete="off">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="email">E-mail:</label><br>
    <input type="text" id="email" name="email" @error('email') style="border-color:red" @enderror value="{{ old('email') }}"><br>
    @error('email')
        <div>
            {{ $message }}
        </div>
    @enderror
    <label for="password">Password:</label><br>
    <input type="text" id="password" name="password"><br>
    <label for="password_confirm">Confirm password:</label><br>
    <input type="text" id="password_confirmation" name="password_confirmation"><br><br>
    <input type="submit" value="Submit">
</form>
@endsection