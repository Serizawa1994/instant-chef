<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['ingredient', 'user_id', "title","portion",'how_to_1','how_to_2','how_to_3','how_to_4',
                          'how_to_5','how_to_6','how_to_7','how_to_8','how_to_9','how_to_10','how_to_11',
                          'how_to_12','one_point'];
                          
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    
    public function user_favorites()
    {
        return $this->belongsToMany(User::class, 'recipe_user', 'recipe_id', 'user_id')->withTimestamps();
    }
}
