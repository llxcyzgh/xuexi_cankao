<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    // 显示登录页面
    public function create()
    {
        return view('sessions.create');
    }

    // 处理登录过程
    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email'    => 'required|email|max:255',
            'password' => 'required',
        ]);
//        dd($credentials); // 是一个验证处理后的参数数组(过滤后?)

        if (Auth::attempt($credentials, $request->has('remember'))) {
            session()->flash('success', '欢迎回来');
            return redirect()->route('users.show', [Auth::user()]);
        } else {
            session()->flash('danger', '很抱歉, 您的账号和密码不匹配');
            return redirect()->back()->withInput();
        }
    }

    // 退出登录
    public function destroy()
    {
//        dd(new Auth());
        Auth::logout();
        session()->flash('success', '您已成功退出');
//        return redirect()->route('login');
        return redirect('login');
    }
}
