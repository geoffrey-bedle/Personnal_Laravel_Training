@extends('layout')

@section('content')
    <div class="show-article-section">

        <div>
            <h1>{{$post->title}}</h1>
            <p>{{$post->content}}</p>
        </div>

        <div>
            <img src="https://placekitten.com/500/500">
        </div>

    </div>
@stop
