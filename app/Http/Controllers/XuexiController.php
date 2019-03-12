<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Xuexi;

class XuexiController extends Controller
{
    public function index()
    {
        $xuexis = Xuexi::all();
//        $xuexis = Xuexi::where('is_checked', true)->get();
        return view('xuexi.index', compact('xuexis'));
    }

    public function create()
    {
        return view('xuexi.create');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'question' => 'required|unique:xuexi',
            'answer'   => 'required',
        ]);

        Xuexi::create($data);

        session()->flash('success', '新增条目成功');
        return redirect()->route('xuexi.create');
    }

    public function edit()
    {
        return view('xuexi.edit');
    }

    public function update()
    {

    }
}
