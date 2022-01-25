@extends('layout')
@section('content_inner')

@foreach ($cars as $c)
    
    <form action={{route('edit')}} method="POST">
        @csrf
        <input type="hidden" name="id" value={{$c->id}}>
        <label for="" >name:</label>
        <input type="text" value={{$c->name}} name='name'> <br>

        <label for="">model:</label>
        <input type="text" value={{$c->model}} name='model'> <br>

        <label for="">year:</label>
        <input type="text" value={{$c->year}} name='year'> <br>

        <label for="">engine:</label>
        <input type="text" value={{$c->engine}} name='engine'> <br>

        <label for="">levy:</label>
        <input type="text" value={{$c->levy}} name='levy'> <br>

        <label for="">price:</label>
        <input type="text" value={{$c->price}} name='price'> <br>

        <button>Save</button>
        <button name="delete">Delete</button>
    </form>
    <hr>
@endforeach
@endsection