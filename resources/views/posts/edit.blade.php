@extends('layout')
@section('main')
  <form style="display:flex; flex-direction: column;" class="main__form" action="{{ route('posts.update', $id) }}" method="post">
    @csrf
    @method('PATCH')
    <input type="text" name="author" placeholder="Nome Autore Post" value="{{ $author }}">
    <input type="text" name="title" placeholder="Titolo Post" value="{{ $title }}">
    <textarea rows="5" name="content" placeholder="Titolo Post">{{ $content }}</textarea>
    <input type="submit" value="Modifica Post">
  </form>
@endsection
