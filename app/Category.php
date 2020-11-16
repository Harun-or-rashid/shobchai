<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];


    public function child()
    {
        return $this->hasMany(SubCategory::class);
    }
}
