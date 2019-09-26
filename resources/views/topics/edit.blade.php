@extends('layouts.app')


 @section('content')

<div class="container">
    <h1>Créer Un topic</h1>
    <hr>
    <form action="{{ route('topics.update', $topic)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Titre du topic</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ $topic->title }}">

        @error('title')
    <div class="invalid-feedback"> {{ $errors->first('title') }}</div>
       @enderror

    </div>

    <div class="form-group">
        <label for="content">Votre sujet</label>
    <textarea name="content" id="content"  rows="5" class="form-control @error('content') is-invalid @enderror">{{ $topic->content }}</textarea>
        
        @error('contnet')
        <div class="invalid-feedback"> {{ $errors->first('content') }}</div>
           @enderror
    </div>

            <button type="submit" class="btn btn-success">Modifier mon topic</button>

   
</form>
</div>
 @endsection