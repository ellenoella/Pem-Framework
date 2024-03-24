<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    private static $Greeting = "Ola";
    public static function getGreeting()
    {
        return self::$Greeting;
    }
    private static $car = [['Kode' => '002', 'Merk' => 'Mazda', 'Tipe' => 'Hatchback', 'Transmisi' => 'Manual', 'Deskripsi'=> 'ini mobil'], ['Kode' => '004', 'Merk' => 'Ford', 'Tipe' => 'Sedan', 'Transmisi' => 'Manual', 'Deskripsi'=> 'ini mobil' ], ['Kode' => '007', 'Merk' => 'Subaru', 'Tipe' => 'Sedan', 'Transmisi' => 'Matic', 'Deskripsi'=> 'iini moabil']];

    public static function getCar()
    {
        return collect(self::$car);
    }
    public static function getDetail($Kode){
        $car= static::getCar();
        return $car -> firstWhere('Kode',$Kode);
    }
}
