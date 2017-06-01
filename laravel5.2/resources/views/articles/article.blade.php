@extends('app')
@section('content')
    <script src="{{ asset('js/marked.js') }}"></script>
    {{--<script src="{{ asset('js/simplemde.js') }}"></script>--}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <h1 style="align-content: center">{{$article->title}}</h1>
    <p id="content">{{$article->content}}</p>
    <!-- 将id为content的标签内容Markdown格式化 -->
    <script>
        var $content = $('#content');
        var data = $content.text();
        $content.html(marked(data));
    </script>
@endsection