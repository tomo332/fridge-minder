<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodItem;

class FoodItemController extends Controller
{
    public function foodview(){
        $posts=FoodItem::all();
       return view('food_item',compact('posts'));
    }

    public function foodadd(){
        return view('food_add');
    }

    public function store(Request $request){

        $request->validate([
            'food_name' => 'required|max:20',
            'tag' => 'required|max:15',
            'photo_url' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $fileName = time() . '.' . $request->photo_url->extension();
        $request->photo_url->storeAs('public/images', $fileName);

        $post = new FoodItem;
        $post->food_name = $request->input('food_name');
        $post->quantity = $request->input('quantity');
        $post->expiration_date = $request->input('expiration_date');
        $post->best_before_date = $request->input('best_before_date');
        $post->tag = $request->input('tag');
        $post->photo_url = $fileName;
        $post->save();
        // $post = FoodItem::create([
        //     'food_name' => $request->food_name,
        //     'quantity' => $request->quantity,
        //     'expiration_date' => $request->expiration_date,
        //     'best_before_date' => $request->best_before_date,
        //     'tag' => $request->tag,
        //     'photo_url' => $request->photo_url,
        // ]);


        //$post = FoodItem::create($validated);
        return back()->with('message','保存しました');//セッションにメッセージを一時保存
    }
}
