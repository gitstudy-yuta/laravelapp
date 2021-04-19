<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ILLuminate\http\Response;

class HelloController extends Controller
{
    public function index(){
        $data = [
            ['name'=>'山田たろう', 'mail'=>'taro@yamada'],
            ['name'=>'田中花子', 'mail'=>'hanako@tanaka'],
            ['name'=>'鈴木幸子', 'mail'=>'sachiko@suzuki']
        ];
        return view('hello.index', ['data'=>$data]);
    }

    // public function post(Request $request){
    //     $data = [1, 2, 3, 4, 5, 6];
    //     return view('hello.index', $data);
    // }
}
