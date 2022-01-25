@extends('layouts.app')
@section('title')insert artist
@endsection
@section('content_inner')

<form action={{route('insert_artist')}} method="POST">
    @csrf
    <label for="">Artist name:</label>
    <input type="text" name="artist_name">
    <button>Insert</button>
</form>
@endsection