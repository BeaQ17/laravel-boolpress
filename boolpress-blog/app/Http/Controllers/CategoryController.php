<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display listing of resources
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display specified resource
     * 
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
    */
    public function show(Category $category)
    {
        //ddd($category);
        return view("guest.categories.show", compact("category"));
    }
}
