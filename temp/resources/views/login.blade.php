@extends("layouts.app")
@section('title')Log in @endsection
@section('content_inner')
<h2>Log in</h2>
<form action="{{ route('login') }}" method="post" id="login">
    @csrf
</form>
<script src="{{ mix('js/app.js') }}"></script>
@endsection
