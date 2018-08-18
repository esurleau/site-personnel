<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description','user_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient','ingredient_recipes');
    }
    public function steps() 
    {
        return $this->hasMany('App\RecipeStep');
    }
    public function ingrec()
    {
        return $this->hasMany('App\IngredientRecipe');
    }
}
