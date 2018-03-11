@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
        <H1>{{$title}}</H1>
        <P>tHIS IS THE LARAVEL APPLICATION FROM THE LARAVEL FROM SCRACH FROM YOUTUBE SERIOES </P>
        <a href="/login" class="btn btn-primary btn-lg">Log In</a>
        <a href="/register" class="btn btn-success btn-lg">Register</a>
</div>
@endsection