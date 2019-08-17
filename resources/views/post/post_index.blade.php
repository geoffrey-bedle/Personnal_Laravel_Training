@extends('layout')
@section('content')

    <div class="article-section">

        @foreach ($posts as $post)




            <div class="card article-card" style="width: 18rem;">
                <img class="card-img-top" src="http://placebacon.net/400/300" alt="Card image cap">
                <div class="card-body">
                    <h1 class="card-title">{{$post->title}}</h1>
                    <h5>{{$post->category->name}}</h5>
                    <p class="card-text color">{{$post->content}}</p>
                    <em>{{$post->user->name}}</em>
                    @foreach($post->tags as $tag)
                        <div>#{{$tag->name}}</div>
                    @endforeach
                    <div class="card-button">
                        <a href="{{route('post.show',$post)}}" class="btn btn-success btn-show">Voir l'article</a>
                        @if(auth()->user() == $post->user)
                        <form method="post" action="{{route('post.destroy',$post->id)}}">
                            @csrf
                            <button onclick="return confirm('êtes vous sur de vouloir supprimer cet article ?')"
                                    class="btn btn-danger">Supprimer
                            </button>
                        </form>
                            @endif
                    </div>
                </div>
            </div>






        @endforeach
    </div>
@endsection

