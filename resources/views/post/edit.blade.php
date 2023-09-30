@extends('layouts.template')
@section('mysite')
    <form action="{{route('posts.update', $post->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="title">Title</label><br>
            <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{$post->title}}">
        </div><br>
        <div class="form-group">
            <label for="content">Content</label><br>
            <input name="content" type="text" class="form-control" id="content" placeholder="Content" value="{{$post->content}}">
        </div><br>
        <div class="form-group">
            <label for="image">Image</label><br>
            <input name="image" type="text" class="form-control" id="image" placeholder="Image" value="{{$post->image}}">
        </div><br>
        <div class="form-group">
            <label for="is_published">Is_Published</label><br>
            <input name="is_published" type="number" class="form-control" id="is_published" placeholder="Is_published">
        </div><br>

        <div class="form-group">
            <label for="category">Category_id</label>
            <select class="form-control" id="category" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{$category->id === $post->category_id ? ' selected' : ''}}
                        value="{{$category->id}}">{{$category->title}}
                    </option>
                @endforeach
            </select>
        </div><br>
        <div class="form-group">
            <label for="tags">Tags</label>
            <select multiple class="form-control" id="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option
                        @foreach($post->tags as $postTag)
                        {{$tag->id === $postTag->id ? ' selected' : ''}}
                        @endforeach
                        value="{{$tag->id}}">{{$tag->title}}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
