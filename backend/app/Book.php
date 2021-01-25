<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['item_name', 'item_number', 'item_amount', 'published', 'alphabet_title'];
    protected $appends = ['total_price'];

    protected $casts = [
        'published' => 'date',
    ];


    public function getTotalPriceAttribute()
    {
        return $this->item_number * $this->item_amount;
    }

    public function comments()
    {
        return $this->hasMany('App\BookComment');
    }
}
