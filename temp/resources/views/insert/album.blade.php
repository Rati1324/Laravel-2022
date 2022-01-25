@extends('layouts.app')
@section('title')insert album
@endsection
@section('content_inner')

<form action={{route('insert_album')}} method="POST">
    @csrf
    <label for="">Artist name:</label>
    <label for="">:</label>
    <input type="text" name="artist_name">
    <button>Insert</button>
</form>
@endsection