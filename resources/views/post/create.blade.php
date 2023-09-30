@extends('layouts.template')
@section('mysite')
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label><br>
            <input value="{{old('title')}}" name="title" type="text" class="form-control" id="title" placeholder="Title">

            @error('title')
                <p class="text-danger" >{{$message}}</p>
            @enderror
        </div><br>
        <div class="form-group">
            <label for="content">Content</label><br>
            <input value="{{old('content')}}" name="content" type="text" class="form-control" id="content" placeholder="Content">

            @error('content')
            <p class="text-danger" >{{$message}}</p>
            @enderror
        </div><br>
        <div class="form-group">
            <label for="image">Image</label><br>
            <input value="{{old('image')}}" name="image" type="text" class="form-control" id="image" placeholder="Image">

            @error('image')
            <p class="text-danger" >{{$message}}</p>
            @enderror
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
                    {{ old('category_id') == $category->id ? ' selected' : ''}}
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
                        {{ old('tags') != null && in_array($tag->id, old('tags')) ? 'selected' : ''}}
                        value="{{$tag->id}}">{{$tag->title}}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
