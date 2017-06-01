@extends('app')
@section('content')
    <h1>Articles Page</h1>
    <hr/>
    @foreach($articles as $article)
        <span style="font-size: 20px"><a href="{{ url('articles', $article->id) }}">{{$article->title}}</a></span>
        <p>　　{{$article->content}}</p>
    @endforeach
    <div id="content"></div>
@endsection