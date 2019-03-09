@extends('layouts.default')

@section('title','注册 ')
@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>注册</h5>
            </div>

            @include('shared._errors')

            <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">名称: </label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱: </label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">密码: </label>
                        <input type="text" name="password" id="password" class="form-control"
                               value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        <label for="password_confimation">确认密码: </label>
                        <input type="text" name="password_confimation" id="password_confimation" class="form-control"
                               value="{{ old('password_confimation') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">注册</button>
                </form>
            </div>
        </div>
    </div>

@stop