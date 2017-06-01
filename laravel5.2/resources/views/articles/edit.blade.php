@extends('app')
@section('content')
    <div class="col-md-10 col-md-offset-1">
        <h1>编辑文章</h1>
        {!! Form::model($article, ['method'=>'PATCH', 'url'=>'/articles/'.$article->id]) !!}
        @include('articles.form')
        {!! Form::submit('确认修改', ['class'=>'btn btn-primary form-control']) !!}
        @include('errors.error')
    </div>
    {!! Form::close() !!}
@endsection