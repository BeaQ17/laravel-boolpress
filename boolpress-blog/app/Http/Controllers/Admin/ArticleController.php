<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all()->sortByDesc("id");
        return view("admin.articles.index", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.articles.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "title" => "required | min:5 | max:255",
            "subtitle" => "nullable | max:255",
            "date" => "required",
            "author" => "required",
            "image" => 'nullable | image | max:100',
            "text" => "required | min:255"
        ]);

        
        if($request->hasFile('image')){
            $file_path = Storage::put('article_images', $validateData['image']);
            //ddd($file_path);
            $validateData['image'] = $file_path;
        }

        $image = Storage::disk("public")->put("articles_img", $request->cover);
        $validateData["image"] = $image;

        $article = Article::create($validateData);
        return redirect()->route("admin.articles.index", $article->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        {
            return view("admin.articles.show", compact("article"));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view("admin.articles.edit", compact("article"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validateData = $request->validate([
            "title" => "required | min:5 | max:255",
            "subtitle" => "nullable | max:255",
            "date" => "required",
            "author" => "required",
            "image" => 'nullable | image | max:50',
            "text" => "required | min:255"
        ]);

        if(array_key_exists('image', $validateData)) {
            $file_path = Storage::put('article_images', $validateData['image']);
            //ddd($file_path);
            $validateData['image'] = $file_path;
        }

        $article->update($validateData);
        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index');
    }
}
