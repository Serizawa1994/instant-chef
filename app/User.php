<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function order()
    {
        return $this->hasMany(Order::class);
    }
    
    public function provide()
    {
        return $this->hasMany(Recipe::class);
    }
    
    public function favorites()
    {
        return $this->belongsToMany(Recipe::class, 'recipe_user', 'user_id', 'recipe_id')->withTimestamps();
    }
    
    public function add_to_favorites($recipeId){
        
        $exist = $this->already_been_favorite($recipeId);
        
        if($exist){
        return false;
        
        }else{
            $this->favorites()->attach($recipeId);
        return true;
        }
    }
    
    public function remove_from_favorites($recipeId){
        
        $exist = $this->already_been_favorite($recipeId);
        
        if($exist){
            $this->favorites()->detach($recipeId);
        return true;
        
        }else{
        return false;
        }
    }
    
    public function already_been_favorite($recipeId){
        return $this->favorites()->where("recipe_id",$recipeId)->exists();
    }
}
