@extends('layouts.default')

@section('title','重置密码')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>重置密码</h5>
            </div>
            @include('shared._errors')
            <div class="card-body">
                <form action="{{ route('password.update') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">邮箱地址</label>
                        <div class="col-md-6">
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">密码</label>
                        <div class="col-md-6">
                            <input type="text" id="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">确认dfdfjfhdkihf密码</label>
                        <div class="col-md-6">
                            <input type="text" id="password_confirmation" name="password_confirmation"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">确dfdjagkj砷认密码</label>
                        <div class="col-md-6">
                            <input type="text" id="password_confirmation" name="password_confirmation"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">确认dfdf5ds4df5as5545密码</label>
                        <div class="col-md-6">
                            <input type="text" id="password_confirmation" name="password_confirmation"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">确认密码</label>
                        <div class="col-md-6">
                            <input type="text" id="password_confirmation" name="password_confirmation"
                                   class="form-control">
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="offset-md-4 col-md-6">
                            <button type="submit" class="btn btn-primary">密码重置</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection