@extends('layout')

@section('content')
    {{Form::open(['method' => 'put', 'url' => route('post.update', $post)])}}
    <div class="form-group">
        {{Form::label('title', 'Titre')}}
        {{Form::text('title',$post->title, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('content', 'Texte')}}
        {{Form::textarea('content',$post->content, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('category_id','Catégorie')}}
        {{Form::select('category_id', $categories, $post->category_id , ['class' => 'form-control'])}}
    </div>

    <button class="btn btn-primary form-control">Enregistrer</button>

    {{Form::close()}}
    @endsection
