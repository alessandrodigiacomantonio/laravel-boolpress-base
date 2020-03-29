@extends('layout')
@section('main')
  @foreach ($users as $user)
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
  @endforeach
@endsection
