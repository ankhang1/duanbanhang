<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public function xinchao(){
        return view('example.xinchao');
    }
    public function duongkhang(){
        return view('example.duongkhang');
    }
    public function hoctap()
    {
        return view('example.hoctap');
    }
    public function laravel()
    {
        return view('example.laravel');
    }
    public function ngayhomnay()
    {
        return view('example.ngayhomnay');
    }
}
