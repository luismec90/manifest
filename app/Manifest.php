<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manifest extends Model
{

    use SoftDeletes;

    public static $rules = [
        'code' => 'required',
        'supplier_id' => 'required|exists:suppliers,id',
        'products' => 'required',
    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }


    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($manifest) {
            $manifest->products()->delete();
            $manifest->photos()->delete();
        });
    }
}
