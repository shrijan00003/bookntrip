@extends('layouts.app')
@section('content')
    <H1>Edit Posts</H1>
    {!! Form::open(['action'=>['postscontroller@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Enter Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Here'])}}
        </div>
        {{Form::file('cover_image')}}
        {{Form::hidden('_method','PUT')}}
        <br>
        <br>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection