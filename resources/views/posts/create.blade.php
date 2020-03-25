@extends('posts.layout')
@section('main')
  <form style="display:flex; flex-direction: column;" class="main__form" action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="author" placeholder="Nome Autore Post">
    <input type="text" name="title" placeholder="Titolo Post">
    <textarea rows="5" name="content" placeholder="Titolo Post"></textarea>
    <input type="submit" value="Pubblica Post">
  </form>
@endsection
