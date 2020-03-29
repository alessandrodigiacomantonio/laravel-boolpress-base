@extends('layout')
@section('main')
  @foreach ($photos as $photo)
    <div class="photo">
      @foreach ($photo->getAttributes() as $key => $value)
        <h2>{{$key}}</h2>
        <p>{{$value}}</p>
      @endforeach
      <div class="photo-user">
        {{$photo->usersTable->id}}
      </div>
    </div>
  @endforeach
@endsection
