@extends('layouts.admin')
@section('content')
    <div>
        <div><h1>{{$post->id}}. {{$post->title}}</h1></div>
        <div><h2>Content: </h2><h5>{{$post->content}}</h5></div>
        <div><h2>Image: </h2><h5>{{$post->image}}</h5></div>
        <div><h2>Category_id: </h2><h5>{{$post->category_id}}</h5></div>
    </div>
    <div>
        <a href="{{route('admin.post.edit', $post->id)}}" class="btn btn-outline-dark">Edit</a>
    </div><br>
    <div>
        <form action="{{route('admin.post.delete', $post->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-outline-danger">
        </form>
    </div>
@endsection
