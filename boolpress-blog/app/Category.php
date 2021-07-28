<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get all articles for the Cateogry
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
