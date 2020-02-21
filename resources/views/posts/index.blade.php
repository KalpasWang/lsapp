@extends('layouts.master')


@section('content')
    <h1>Posts</h1>
    <br><br>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card border-dark mb-3">
                <h6 class="card-header">{{$post->created_at}}</h6>
                <div class="card-body">
                    <h4 class="card-title">{{$post->title}}</h4>
                    <p class="card-text ellipsis">{{$post->body}}</p>
                <a href="/posts/{{$post->id}}" class="btn btn-secondary">Detail</a>
                </div>
            </div>   
        @endforeach
    @else
        <h2>Soory. No post found...</h2>
    @endif
@endsection
        