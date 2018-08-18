<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeStep extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content','recipe_id','step',
    ];
}
