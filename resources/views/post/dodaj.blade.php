@extends('szablon.szablon')
@section('tytul','Dodawaniu postu')
@section('podtytul', 'Dodanie postu')
@section('tresc')
<form action="{{route('post.store')}}" method="post" class="w-100">
    @csrf
    <div class="for-group">
        <label for="tytul">Tytuł</label>
        <input type="text" class="form-control" name="tytul" id="tytul" placeholder="Podaj tytuł postu" value="{{old('tytul')}}">
    </div>
    <div class="for-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" name="autor" id="autor" placeholder="Podaj autora postu" value="{{old('autor')}}">
    </div>
    <div class="for-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Podaj email autora postu" value="{{old('email')}}">
    </div><div class="for-group">
        <label for="tresc">Treść</label>
        <textarea class="form-control" name="tresc" id="tresc" cols="4" >{{old('tresc')}}</textarea>
    </div>
    <button class="btn btn-primary form-btn mt-3" type="submit">Dodaj post</button>
</form>
<a href="{{route('post.index')}}"><button class="btn btn-success form-btn mt-2" type="button">Do listy postów</button></a>
@endsection