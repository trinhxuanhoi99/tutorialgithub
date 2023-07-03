<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
class Mycontroller extends Controller
{
    public function index($user){
        return ['name'=>'viet','age'=>'20'];
    }
    public function Khoahoc($ten)
    {
        echo "Khoa hoc:" .$ten;
        return redirect()->route('myroute2');
    }
    public function GetUrl(Request $request){
       // return $request->url();
        if ($request->isMethod('get'))
            echo "phuong thuc get";
        else
            echo "khong phai phuong thuc get";
    }

    public function form(Request $request){
        echo $request->hoten;
    }

    public function setcookie(){
        $reponse = new Response();
        $reponse->withCookie(
            'khoahoc','laravel',1
        );
        return $reponse;
    }
    public function getcookie(Request $request){
        return $request->cookie('khoahoc');
    }
}

