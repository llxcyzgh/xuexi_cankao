@extends('layouts.default')

@section('title','登录')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>登录</h5>
            </div>

            <div class="card-body">
                @include('shared._errors')

                <form action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email">邮箱:</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">密码:</label>
                        <input type="password" name="password" id="password" value="{{ old('password') }}" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">登录</button>
                </form>

                <hr>

                <p>没有账号? <a href="{{ route('signup') }}">立即注册</a></p>
            </div>
        </div>
    </div>
@endsection