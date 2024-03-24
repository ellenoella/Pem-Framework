<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public static function list(){
        return view ('/Car',['Car'=> Car::getCar()]);
    }
    public static function Cardetail ($Kode){
        $detail= Car ::getDetail($Kode);
        return view('Detail',['Detail'=>$detail]);
    }
}
