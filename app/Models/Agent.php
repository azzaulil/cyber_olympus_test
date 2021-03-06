<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $table =  'agent';
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
