<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{ public function showIndex()
    {
        return view('home');
    }
    public function showArray()
        {
           $array = [
            ['id' => 1, 'title' => 'Джинсы "Звездное небо"', 'price' => '500', 'path' => '111.jpeg'],
            ['id' => 2, 'title' => 'Cпортивное трико', 'price' => '1500', 'path' => '222.jpeg'],
            ['id' => 1, 'title' => 'Шорты', 'price' => '500', 'path' => '333.jpg'],
            ['id' => 2, 'title' => 'Джинсы в стиле y2k', 'price' => '1500', 'path' => '4444.jpg'],
            ];
           
            return view('array', compact('array') );
        }
    }
