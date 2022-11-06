<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 指定ユーザーのプロファイルを表示
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        #itiran
        return view('users.index');
    }

    public function create()
    {
        return view('users.create');
    }


}
