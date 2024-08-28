<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $hola = 1924;

        for($i = 0; $i < $hola; $i++) {
            for($j = 0; $j < $i - 1; $j++ ){
                echo '$';
            }
        }
    }


}
