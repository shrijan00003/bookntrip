@extends('layouts.app')
@section('content')
    <H1>{{$title}}</H1>
    @if(count($services)>0)
     <ul class="list-group">
         @foreach($services as $service)
         <li class="list-group-item">{{$service}}</li>
         @endforeach
     </ul>
     @endif
    <P>This is services page  </P>
@endsection