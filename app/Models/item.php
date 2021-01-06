<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $table = 'item';
    use HasFactory;

    public function carts()
    {
        return $this->belongsToMany('cart');
    }
}
