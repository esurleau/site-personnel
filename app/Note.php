<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'priority','user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
