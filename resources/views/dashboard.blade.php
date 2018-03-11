@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary btn-lg">New Post</a>
                   <h3>Your post Here</h3>
                   @if(count($posts)>0)
                   <table class="table table-sm table-inverse">
                        <thead>
                          <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                          <tr>
                            <th scope="row">{{$post->title}}</th>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-outline-info btn-sm">Edit</a></td>
                            <td>
                                    {!! Form::open(['action'=>['postscontroller@destroy',$post->id],'method'=>'POST','class'=>'pull-right']) !!}
                                    {{ Form::hidden('_method','DELETE') }}
                                    {{Form::submit('Delete',['class'=>'btn btn-outline-danger btn-sm'])}}
                                    {!! Form::close() !!}
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      @else
                      <p>you have no posts</p>
                      @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
