@extends('app')
@section('content')
    <div class="col-md-10 col-md-offset-1">
        <h1>撰写新文章</h1>
        {!! Form::open(['url'=>'/articles']) !!}
        @include('articles.form')
        {!! Form::submit('发表文章', ['class'=>'btn btn-primary form-control']) !!}
        @include('errors.error')
    </div>
    {!! Form::close() !!}
@endsection