@extends('app')
@section('content')
    <div class="col-md-10 col-md-offset-1">
        <h1>欢迎注册</h1>
        {!! Form::open(['url'=>'/auth/register']) !!}

        <div class="form-group">
            {!! Form::label('用户名') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('邮箱') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('密码') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('再次输入密码') !!}
            {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
        </div>

        {!! Form::submit('注册', ['class'=>'btn btn-primary form-control']) !!}
        @include('errors.error')
    </div>
    {!! Form::close() !!}
@endsection