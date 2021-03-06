<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    public $timestamps = false;

    public function posts(){
        return $this->belongsToMany('App\Post','tag_post');
    }
}
