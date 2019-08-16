@extends('layout')

@section('content')
    <div class="dashboard">

        <div class="dashboard-menu">
            <h1>Dashboard</h1>
            <p>{{$user->name}}</p>
        </div>

        <div>
            <h1>Mes derniers articles</h1>

            @foreach($user->posts as $post)
<div class="last-articles">

                <div>
                    {{ $post->title }}
                </div>
            <div class="icons">
                <a href="{{ route('post.edit', $post) }}"> <i class="fas fa-pen icon"></i></a>
                <a onclick="return confirm('Voulez-vous vraiment supprimer cet article ?') " href="{{route('user.destroy', $post)}}">  <i class="fas fa-trash-alt icon"></i></a>

            </div>

</div>
            @endforeach
        </div>
    </div>

@endsection
