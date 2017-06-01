@extends('app') <!-- 声明继承自哪个模板 -->
@section('content')
<h1>About me <?=$name; ?></h1> <!-- 原生PHP代码 -->
<h1>About me {{ $name }}</h1> <!-- 不转义 原来是什么就输出什么 -->
<h1>About me {!! $test !!}</h1> <!-- 转义 会解析HTML标签 -->
<h1>About me {!! $first !!} {!! $last !!}</h1> <!-- 转义 会解析HTML标签 -->
@stop