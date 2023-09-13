<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodItem;

class FoodItemController extends Controller
{
    public function foodview(){
    $user_id = auth()->id();//ログインしているユーザーのIDを代入

    $posts = FoodItem::where('user_id', $user_id)//user_idがログインしているユーザーのidと同じFoodItemのみ取得
        //expiration_date,best_before_dateの両方がNULLのデータを1、それ以外(値が入っているもの)を0
        //COALESCEでexpiration_date,best_before_dateを比較して、昇順で表示
        //両方NULLのものは最後に表示される
        ->orderByRaw("
            CASE
                WHEN expiration_date IS NULL AND best_before_date IS NULL THEN 1
                ELSE 0
            END,
            COALESCE(expiration_date, best_before_date) ASC
        ")
        ->get();


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

        //画像が追加されたらその画像を表示
        if ($request->hasFile('photo_url')) {
            $fileName = time() . '.' . $request->photo_url->extension();
            $request->photo_url->storeAs('public/images', $fileName);
        } else{//追加されなければ代わりの画像を表示
            $fileName = 'fridgeminder.png';
        }

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

    public function destroy(Request $request, FoodItem $post){
        $post->delete();
        $request->session()->flash('message','削除しました');
        return redirect()->route('fooditem');
    }

}
