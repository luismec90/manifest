<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;

    public static $rules = [
        'name' => 'required',
        'nit' => 'unique:suppliers,nit',
    ];

    public static $updateRules = [
        'name' => 'required'
    ];


    public function manifests()
    {
        return $this->hasMany('App\Manifest');
    }


    public static function boot()
    {
        parent::boot();

        static::deleted(function($supplier)
        {
            $supplier->manifests()->delete();
        });
    }
}
