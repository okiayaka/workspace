<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BootsTempleteController extends Controller
{
    /**
     * 指定ユーザーのプロファイルを表示
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('boots_templete.index');
    }

    public function create()
    {
        return view('boots_templete.create');
    }
}
