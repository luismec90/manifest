<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manifest extends Model
{
    public static $rules = [
        'code' => 'required',
        'supplier' => 'required',
        'products' => 'required',
    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
