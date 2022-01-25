@extends('layout')
@section('content_inner')
<style>
    table{
        border: 1px solid;
    }
    thead tr td{
        border: 1px solid;
        border-spacing: 0px;
    }
    tbody tr td{
        /* border: 1px solid; */
    } 
    table tr td{
        border-spacing: 0px;
        padding: 0;
    }
</style>
<div>Filter by levy:</div>
<form action={{route('filter_levy')}}>
    @csrf
    <input type="text" name="levy">
    <button>Filter</button>
</form>
<div>Filter by year:</div>
<form action={{route('filter_year')}}>
    @csrf
    <input type="text" name="year">
    <button>Filter</button>
</form>
<br>
@foreach ($cars as $c)
    <table>
        <thead>
            <td>name</td>
            <td>model</td>
            <td>year</td>
            <td>engine</td>
            <td>levy</td>
            <td>price</td>
        </thead>
        <tbody>
            <td>{{$c->name}}</td>
            <td>{{$c->model}}</td>
            <td>{{$c->year}}</td>
            <td>{{$c->engine}}</td>
            <td>{{$c->levy}}</td>
            <td>{{$c->price}}</td>
        </tbody>
    </table>
@endforeach
@endsection