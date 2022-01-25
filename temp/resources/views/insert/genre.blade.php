@extends('layouts.app')
@section('title')insert genre
@endsection
@section('content_inner')
Choose what to insert 
<select name="" id="select_insert">
    <option value="genre">Genre</option>
    <option value="artist">Artist</option>
    <option value="album">Album</option>
</select>

<form action={{route('insert_genre')}} method="POST" id="insert_genre">
    @csrf
    <label for="">Genre name:</label>
    <input type="text" name="genre_name">
    <button>Insert</button>
</form>
@endsection