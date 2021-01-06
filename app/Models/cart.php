<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = 'cart';
    use HasFactory;

    public function my_user()
    {
        return $this -> hasOne('Users');
    }

    public function items()
    {
        return $this->hasMany('item');
    }
}
