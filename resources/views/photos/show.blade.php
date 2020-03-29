@extends('layout')
@section('main')
  <div class="photo">
    @foreach ($photo->getAttributes() as $key => $value)
      <h2>{{$key}}</h2>
      <p>{{$value}}</p>
    @endforeach
    @foreach ($photo->usersTable as $user)
      <div class="photo-user">
        {{$user->id}}
      </div>
    @endforeach
  </div>
@endsection
