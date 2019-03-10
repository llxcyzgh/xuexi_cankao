@extends('layouts.default')

@section('title','编辑个人资料')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>编辑个人资料</h5>
            </div>

            <div class="card-body">
                @include('shared._errors')

                <div class="gravatar_edit">
                    <a href="http://gravatar.com/emails" target="_blank">
                        <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar">
                    </a>
                </div>

                <form action="{{ route('users.update',[$user]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('patch') }}

                    <div class="form-group">
                        <label for="name">名称:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="password">密码</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">确认密码</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">修改</button>
                </form>
            </div>
        </div>


    </div>
@endsection