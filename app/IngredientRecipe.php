<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngredientRecipe extends Model
{
    protected $fillable = [
        'recipe_id','ingredient_id','quantity',
    ];
    public function ingredient()
    {
        return $this->belongsTo('App\Ingredient','ingredient_id');
    }
}
