<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodItem;

class FoodItemController extends Controller
{
    public function foodview(){
       return view('food_item');
    }

    public function foodadd(){
        return view('food_add');
    }

    public function store(Request $request){


        $post = FoodItem::create([
            'food_name' => $request->food_name,
            'quantity' => $request->quantity,
            'expiration_date' => $request->expiration_date,
            'best_before_date' => $request->best_before_date,
            'tag' => $request->tag,
            'photo_url' => $request->photo_url,
        ]);

        $validated = $request->validate([
            'food_name' => 'required|max:20',
            'tag' => 'required|max:15'
        ]);

        $post = Post::create($validated);
        return back()->with('message','保存しました');//セッションにメッセージを一時保存
    }
}
