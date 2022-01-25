@extends('layouts.app')
@section('title')Home @endsection

@section('content_inner')
<h2>Welcome to my website!</h2>
<div id="example"> </div>

@foreach ($data as $d)
    {{ $d['name']}} - {{ $d->genre['name'] }}
@endforeach
@if (auth()->user())
    <div>You are logged in as: {{ Session::get('email') }} </div>
    {{ auth()->user()->email }}
        <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button>Log out</button>
    </form>
@endif
@endsection