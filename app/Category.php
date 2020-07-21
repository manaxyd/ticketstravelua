<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends \TCG\Voyager\Models\Category
{

    public function posts() {
        return $this->hasMany('Post','category_id','id');
    }
}
