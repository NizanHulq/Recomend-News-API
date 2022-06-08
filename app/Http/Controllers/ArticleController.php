<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function show($id)
    {
        return Article::find($id);
    }



    public function store(Request $request)
    {
        $article = new Article;
        $article->author = $request->author;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->url = $request->url;
        $article->urlToImage = $request->urlToImage;
        $article->publishedAt = $request->publishedAt;
        $article->content = $request->content;
        $article->save();
        return "Data berhasil disimpan";
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->author = $request->author;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->url = $request->url;
        $article->urlToImage = $request->urlToImage;
        $article->publishedAt = $request->publishedAt;
        $article->content = $request->content;
        $article->save();
        return "Data berhasil diupdate";
    }

    public function delete($id)
    {
        Article::find($id)->delete();
        return "Data berhasil dihapus";
    }
}
