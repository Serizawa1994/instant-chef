<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['ingredient', 'user_id',"capability",'outline','details'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}
