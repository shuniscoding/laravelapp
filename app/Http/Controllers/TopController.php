<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        $arr = ['one', 'two', 'three','one', 'two', 'three','one', 'two', 'three','one', 'two', 'three'];

        return view(
            'top.index',
            ['items' => $arr]
        );
    }
}
