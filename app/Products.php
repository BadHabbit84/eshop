<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function item_owner() {

    	return $this->belongsTo(User::class);
    }
}
