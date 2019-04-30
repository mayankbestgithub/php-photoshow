@extends('layouts.app')

@section('content')
<h1> {{$album->name}}</h1>
    <p><img width="20%" height="15%" class="img-thumbnail" src="/storage/cover_image/{{$album->cover_image}}"></p>
<button class="btn btn-dark" onclick="location.href='/'">Back</button>
<button class="btn btn-secondary" onclick="location.href='/photo/create/{{$album->id}}'">Upload Photo</button>
<h4 class="font-weight-light text-center text-lg-left mt-4 mb-0">Photos</h4>

  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">
@if(count($album->photos)>0)
    @foreach($album->photos as $photo)
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="/storage/cover_image/{{$photo->album_id}}/{{$photo->photo}}" alt=" {{$photo->title}}">
          </a>
    </div>
    @endforeach
@else    
<div class="col-lg-3 col-md-4 col-6">
    No Photo Added
</div>
 @endif
    </div>
@endsection    