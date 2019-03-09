@extends('layouts.default')

@section('title','主页')
@section('content')
    <div class="jumbotron">
        <h1>hello Wi</h1>
        <p class="lead">你现在位于 Wi app 的首页</p>
        <p>學習, 从这里开始</p>
        <a href="{{ route('signup') }}" class="btn btn-lg btn-success">现在注册</a>
    </div>
@endsection
