<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //relacion uno a muchos (inversa)
    public function user() {
        return $this->belongsTo('App\Models\User');
    }


    //Relacion uno a muchos polimorfica
    public function comments() {
        return $this->morphMany('App\Models\Comments', 'commentable');
    }

    //Relacion muchos a muchos polimorfica
   public function posts() {
        return $this->morphMany('App\Models\Tag', 'taggable');
    }

    public function videos() {
         return $this->morphedByMany('App\Models\Video', 'taggable');
    }

}
