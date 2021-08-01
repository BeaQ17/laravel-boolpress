<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
       /* 
       //Senza risorsa
       $articles = Article::with(["tags"])->paginate();
        return $articles;

        //Con risorsa senza relazioni
        return ArticleResource::collection(Article::all());

        */

        //Con risorsa e relazioni
        return ArticleResource::collection(Article::with(["category", "tags"])->paginate());

    }
}
