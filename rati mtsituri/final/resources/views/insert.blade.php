@extends('layout')
@section('content_inner')
<form action={{route('insert')}} method="POST">
    @csrf
    <label for="">name:</label>
    <input type="text" name='name'> <br>

    <label for="">model:</label>
    <input type="text" name='model'> <br>

    <label for="">year:</label>
    <input type="text" name='year'> <br>

    <label for="">engine:</label>
    <input type="text" name='engine'> <br>

    <label for="">levy:</label>
    <input type="text" name='levy'> <br>

    <label for="">price:</label>
    <input type="text" name='price'> <br>

    <button>Insert</button>
</form>
@endsection