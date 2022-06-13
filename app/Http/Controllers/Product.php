<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
   public function index(){
    $paste = config('pasta');
    $lunghe = [];
    $corte= [];
    $cortissime=[];

    foreach($paste as $pasta){
        switch($pasta['tipo']){
            case 'corta':
                $corte[] = $pasta;
                break;
            case 'lunga':
                $lunghe[] = $pasta;
                break;
            case 'cortissima':
                $cortissime[] = $pasta;
                break;
        }
    }
    return view('prodotti',['lunghe'=> $lunghe, 'corte'=> $corte, 'cortissime' => $cortissime]);
   }
   public function news(){
    return view('news');
   }
   public function casa(){
    return view('home');
   }
}
