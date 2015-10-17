<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;
    
    public static $rules = [
        'name' => 'unique:brands,name',
    ];
    public static $updateRules = [
        'name' => 'required',
    ];
}
