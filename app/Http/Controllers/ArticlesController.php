<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\AddArticleRequest;
use App\Metier\MetierArticle;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * ArticlesController constructor.
     */
    public function __construct()
    {
    }


    /**
     * Affiche le formulaiore d'ajout d'article
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showForm()
    {
        return view('form.addArticle');
    }

    /**
     * Stocker en bdd l'article
     * @param AddArticleRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(AddArticleRequest $request)
    {
        /**
         * @var $metier MetierArticle
         */
        $metier = new MetierArticle();

        $metier->add($request->input('titre'),$request->input('description'));
        return view('pages.index', ["tableau" => $metier->all()]);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /**
         * @var $metier MetierArticle
         */
        $metier = new MetierArticle();
        return view('pages.index', ["tableau" => $metier->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $article
     * @return \Illuminate\Http\Response
     */
    public function show($article)
    {
        /**
         * @var $metier MetierArticle
         */
        $metier = new MetierArticle();
        return view('pages.singleArticle',
            ["article" => $metier->get($article)]);
    }


}
