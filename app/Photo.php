<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    use SoftDeletes;


    public function path()
    {
        return "/companies/{$this->company_id}/{$this->manifest_id}/{$this->name}";

    }
}
