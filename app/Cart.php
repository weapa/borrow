<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $fillable = ['user_id', 'item_id'];
    protected $guarded = [];

    public function item(){
        return $this->belongsTo(Item::class)->select(['id', 'title', 'detail', 'image']);
    }
}
