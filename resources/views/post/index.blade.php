@extends('layouts.template')
@section('mysite')
    <div>
    @foreach($posts as $post)
            <div><a href="{{route('posts.show', $post->id)}}"> {{$post->id}}. {{$post->title}} </a></div>
    @endforeach
    </div>
    <div>
        {{$posts->withQueryString()->links()}}
    </div>
@endsection
