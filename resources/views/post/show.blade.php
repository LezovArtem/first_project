@extends('layouts.template')
@section('mysite')
    <div>
        <div>{{$post->id}}. {{$post->title}}</div>
        <div>{{$post->content}}</div>
        <div>{{$post->image}}</div>
        <div>Category: {{$post->category->title}}</div>
    </div>
    <div>
        <a href="{{route('posts.edit', $post->id)}}" class="btn-dark">Edit</a>
    </div>
    <div>
        <form action="{{route('posts.delete', $post->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn-danger">
        </form>
    </div>
@endsection
