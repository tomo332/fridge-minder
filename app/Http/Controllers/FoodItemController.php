<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodItemController extends Controller
{
    public function foodview(){
       return view('food_item');
    }

    public function foodadd(){
        return view('food_add');
    }
}
