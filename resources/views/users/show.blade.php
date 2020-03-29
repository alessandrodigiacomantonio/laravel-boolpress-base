@extends('layout')
@section('main')
  <div class="user">
    @foreach ($user->getAttributes() as $key => $value)
      <h2>{{$key}}</h2>
      <p>{{$value}}</p>
    @endforeach
    @foreach ($user->photosTable as $photos)
      <div class="user-photos">
        {{$photos->user_id}}
      </div>
    @endforeach
  </div>
@endsection
