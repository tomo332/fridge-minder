<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodItem;

class FoodItemController extends Controller
{
    public function foodview(){
        $posts=FoodItem::where('user_id', auth()->id())->get();//user_idがログインしているユーザーのidと同じFoodItemのみ取得
       return view('/food_item',compact('posts'));//食品一覧ページに表示
    }

    public function foodadd(){
        return view('/food_add');
    }

    public function store(Request $request){

        $request->validate([
            'food_name' => 'required|max:20',
            'tag' => 'required|max:15',
            //'photo_url' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $user_id = auth()->id();

        $fileName = time() . '.' . $request->photo_url->extension();
        $request->photo_url->storeAs('public/images', $fileName);

        $post = new FoodItem;
        $post->food_name = $request->input('food_name');
        $post->quantity = $request->input('quantity');
        $post->expiration_date = $request->input('expiration_date');
        $post->best_before_date = $request->input('best_before_date');
        $post->tag = $request->input('tag');
        $post->photo_url = $fileName;
        $post->user_id = $user_id;
        $post->save();

        return back()->with('message','保存しました');//セッションにメッセージを一時保存
    }

    public function edit(FoodItem $post){
        return view('/food_edit', compact('post'));
    }
    public function update(Request $request, FoodItem $post){
        $request->validate([
            'food_name' => 'required|max:20',
            'tag' => 'required|max:15',
            //'photo_url' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $user_id = auth()->id();
        $fileName = null;//初期化

        // 新しい画像がアップロードされた場合にのみ処理を行う
        if ($request->hasFile('photo_url')) {
            $fileName = time() . '.' . $request->photo_url->extension();
            $request->photo_url->storeAs('public/images', $fileName);
            $post->photo_url = $fileName;
        }

        //新しいレコードを作成しないで、既存のレコードを更新
        $post->food_name = $request->input('food_name');
        $post->quantity = $request->input('quantity');
        $post->expiration_date = $request->input('expiration_date');
        $post->best_before_date = $request->input('best_before_date');
        $post->tag = $request->input('tag');
        $post->user_id = $user_id;
        $post->save();


            //$post = FoodItem::create($validated);

        return back()->with('message','編集しました');//セッションにメッセージを一時保存
    }

}
