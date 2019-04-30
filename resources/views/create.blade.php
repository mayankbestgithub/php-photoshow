@extends('layouts.app')

@section('content')
<h1>Create Album</h1>

<div class="row">
    <form method="post" action="albums/save" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="name">Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="name">Upload Album</label>
            <input type="file" class="form-control" name="cover_image">
        </div>
        <input type="submit" class="btn btn-primary" value="submit">
    </form>    
</div>
@endsection