<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    private static $Greeting = "Ola";
    public static function getGreeting (){
        return self::$Greeting;
    }
    private static $biodata = [['name' => 'enjina','email'=>'enjina22'],['name'=> 'ellen','email'=> 'ellen02']];

    public static function getBiodata (){
        return collect (self::$biodata);
    }
}
