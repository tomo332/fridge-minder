<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'food_name',
        'quantity',
        'expiration_date',
        'best_before_date',
        'tag',
        'photo_url',
        //'user_id',

    ];

    //一つのFoodItemは一人のUserに紐づく
    public function user(){
        return $this->belongsTo(User::class);
    }
}
