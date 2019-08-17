@extends('layout')

@section ('content')
<h1>Nous contacter</h1>
{{Form::open(['method' => 'post', 'url' => route('send')])}}
    <div class="form-group">
    {!! Form::label('email', 'E-mail') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
<div class="form-group">
    {!! Form::label('content', 'Message') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>
<div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</div>
    {!! Form::close() !!}

    @endsection
