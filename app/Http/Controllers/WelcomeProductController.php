<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeProductController extends Controller
{
    //
    public function index($sku, $nombre=null)
    {
        if($nombre)
        {return "sku: {$sku} nombre: {$nombre}";}
        else{
            return "sku: {$sku} producto sin nombre";
            }
            
    }
}
