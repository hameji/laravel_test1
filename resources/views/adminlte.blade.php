@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <p>ここがコンテンツ部分です</p>
@endsection

@section('css')
<!-- ページごとCSSの指定
    <link rel="stylesheet" href="/css/app.css">
-->
@stop

@section('js')
    <script>console.log('ページごとのJSの記述');</script>
@stop