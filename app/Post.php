<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends \TCG\Voyager\Models\Post
{

    public function user(){
        return $this->belongsTo('App\User','author_id', 'id');
    }

    public function category(){
        return $this->belongsTo('App\Category','category_id', 'id');
    }

    public function scopeSearch($query, $forsearch) {
        return $query->where('title', 'like', '%' .$forsearch. '%')
            ->orWhere('body', 'like', '%' .$forsearch. '%');
    }
}
