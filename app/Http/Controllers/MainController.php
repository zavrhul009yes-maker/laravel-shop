<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{ 
    
public $array = [
    ['id' => 1, 'title' => 'Джинсы "Звездное небо"', 'price' => '500', 'path' => '111.jpeg'],
    ['id' => 2, 'title' => 'Cпортивное трико', 'price' => '580', 'path' => '222.jpeg'],
    ['id' => 3, 'title' => 'Шорты', 'price' => '550', 'path' => '333.jpg'],
    ['id' => 4, 'title' => 'Джинсы в стиле y2k', 'price' => '1500', 'path' => '4444.jpg'],
    ['id' => 5, 'title' => 'Джинсы"', 'price' => '5000', 'path' => '111.jpeg'],
    ['id' => 6, 'title' => 'Cпортивные штаны', 'price' => '2200', 'path' => '222.jpeg'],
    ['id' => 7, 'title' => 'Шорты y2k', 'price' => '2300', 'path' => '333.jpg'],
    ['id' => 8, 'title' => 'Джинсы в стиле 90-х', 'price' => '1230', 'path' => '4444.jpg'],
    ];


    public function showIndex()
    {
        return view('home');
    }
    public function showArray()
        {
            $array = $this->array;
           
            return view('array', compact('array') );
        }
   
    
    public function shuffleArray()
    {
        $array = $this->array;
        shuffle($array);
        return view('array', compact('array'));
    }

    public function sortArray()
    {
        $array = $this->array;
        usort($array, function($a, $b) {
            return $a['price'] <=> $b['price'];
        });
        
        return view('array', compact('array'));
    }

    public function filterArray()
    {
        $array = $this->array;
        $array = array_filter($array, function($item) {
            return $item['price'] > 1000;
        });
        return view('array', compact('array'));
    }

 }