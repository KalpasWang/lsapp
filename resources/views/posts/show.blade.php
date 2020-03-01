@extends('layouts.master')


@section('content')
    <h1 class="display-4"><b>{{$post->title}}</b></h1>
    <small>Posted at {{$post->created_at}}</small>
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
@endsection
        