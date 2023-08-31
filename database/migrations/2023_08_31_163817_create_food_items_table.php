<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('food_items', function (Blueprint $table) {
            $table->id('food_item_id');//食品アイテムID
            $table->unsignedBigInteger('user_id');//ユーザーID(外部キー参照)
            $table->foreign('user_id')->references('user_id')->on('users');//usersテーブルのuser_idを参照
            $table->string('food_name');//食品名
            $table->integer('quantity')->nullable();//数量
            $table->date('expiration_date')->nullable();//消費期限
            $table->date('best_before_date')->nullable();//賞味期限
            $table->unsignedBigInteger('category_id')->nullable();//カテゴリID(外部キー参照)
            $table->foreign('category_id')->references('category_id')->on('categories');//categoriesテーブルのcategory_idを参照
            $table->string('tag')->nullable;//タグ
            $table->string('photo_url')->nullable;//写真
            $table->timestamps();//
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_items');
    }
};
