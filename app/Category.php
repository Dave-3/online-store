<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'url',
        'title',
        'description',
    ];

    public function products()
    {
        return $this->hasMany(Product::class,'category_id','id');
    }
}

