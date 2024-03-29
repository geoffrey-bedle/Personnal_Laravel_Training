@extends('layout')
@section('content')
   <div class="container">


    {{Form::open(['method' => 'post', 'url' => route('post.store')])}}
    <div class="form-group">
        {{Form::label('title', 'Titre')}}
        {{Form::text('title',null, ['class' => 'form-control'])}}
        {!! $errors->first('title', '<div class=" alert alert-danger">:message</div>') !!}

    </div>

    <div class="form-group">
        {{Form::label('content', 'Texte')}}
        {{Form::textarea('content',null, ['class' => 'form-control'])}}
        {!! $errors->first('content', '<div class=" alert alert-danger">:message</div>') !!}

    </div>

       <div class="form-group">
           {{Form::label('category_id','Catégorie')}}
           {{Form::select('category_id', $categories, null , ['class' => 'form-control'])}}
           {!! $errors->first('category_id', '<div class=" alert alert-danger">:message</div>') !!}

       </div>

       <button class="btn btn-primary form-control">Enregistrer</button>

    {{Form::close()}}
   </div>
@endsection
