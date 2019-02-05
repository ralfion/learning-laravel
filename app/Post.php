<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    //
    protected $fillable = [
        'user_id', 'title', 'content'
    ];


    public function scopeLatest($query)
    {
        return $query->orderBy('id', 'desc');
    }

}
