<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ["title", "subtitle", "date", "author", "five_w", "how_text"];
}
