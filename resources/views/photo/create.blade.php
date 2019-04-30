@extends('layouts.app')

@section('content')
<h1>Create Photo</h1>

<div class="row">
    <form method="post" action="/photo/save" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="name">Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="name">Upload photo</label>
            <input type="file" class="form-control" name="photo">
        </div>
        <input type="hidden" value="{{$id}}" name="album_id">
        <input type="submit" class="btn btn-primary" value="submit">
    </form>    
</div>
@endsection