<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product';

    /**
     * @var array
     */

    public function order_detail()
    {
        return $this->belongsTo('App\Models\OrderDetail');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
