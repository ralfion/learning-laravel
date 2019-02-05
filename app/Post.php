<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public static $files = 'uploads/images/posts/';

    //
    protected $fillable = [
        'user_id', 'title', 'content', 'path'
    ];


    public function getPathAttribute($value)
    {

        return '/' . self::$files . $value; 

    }

}
