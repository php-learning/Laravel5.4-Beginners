<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    private $tableauArticle = [];

    /**
     * ArticlesController constructor.
     */
    public function __construct()
    {
        $this->tableauArticle = [
            2 => new Article(2, "Titre 2", "Ma petite description"),
            6 => new Article(6, "Titre 6", "Ma petite description"),
            14 => new Article(14, "Titre 14", "Ma petite description"),

        ];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.index', ["tableau"=>$this->tableauArticle]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $article
     * @return \Illuminate\Http\Response
     */
    public function show($article)
    {
        return view('pages.singleArticle',
            ["article" => $this->tableauArticle[$article]]);
    }


}
