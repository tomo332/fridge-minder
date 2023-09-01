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
        Schema::table('users', function (Blueprint $table) {
            //usersテーブルのカラム名'user_id'を'id'に変更
            $table->renameColumn('user_id', 'id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //第一引数に変更前のカラム名、第二引数に変更後のカラム名
            $table->renameColumn('id', 'user_id');
        });
    }
};
