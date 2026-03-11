<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestControler extends Controller
{
    public function show()
    {
        $num = 11;
    $str = 'hello';
    $mas = [5, 3, -5, 12];
    return view('second', compact('num','str', 'mas'));
    }
}
