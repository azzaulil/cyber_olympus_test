<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table =  'product_category';

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
}
