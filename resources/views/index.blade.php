@extends('layouts.app')

@section('content')

  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Albums</h1>

  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">
@if(count($albums)>0)
    @foreach($albums as $album)
    <div class="col-lg-3 col-md-4 col-6">
      <a href="/show/{{$album->id}}" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="/storage/cover_image/{{$album->cover_image}}" alt=" {{$album->name}}">
          </a>
    </div>
    @endforeach
 @endif
    </div>

@endsection
