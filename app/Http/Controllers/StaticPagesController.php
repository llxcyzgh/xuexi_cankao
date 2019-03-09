<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
//        dd(public_path());
        // return 'homepage';// 把内容直接显示在页面
        return view('static_pages/home');// 通过视图显示页面
    }

    public function help()
    {
        return view('static_pages/help');
    }

    public function about()
    {
        return view('static_pages/about');
    }


}
