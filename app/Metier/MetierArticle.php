<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 21/11/17
 * Time: 20:58
 */

namespace App\Metier;


use App\Article;
use Illuminate\Support\Collection;
use Symfony\Component\HttpKernel\Tests\Controller;

class MetierArticle
{

    /**
     * MetierArticle constructor.
     */
    public function __construct()
    {
    }

    /**
     * Methode pour enregistrer l'article quelque part (session, bdd, fichier, ....)
     *
     *
     * @param $titre string Titre de l'article
     * @param $description string Description de l'article
     * @param $categorie int id categorie associe
     *
     * @return bool si l'enregistrement s'est bien passé
     */
    public function add($titre, $description, $categorie)
    {
       $article = new Article();
       $article->setTitre($titre);
       $article->setDescription($description);
       $article->setCategorieId($categorie);
        return $article->save();
    }

    /**
     * recuperation de l'article par l'id.
     *
     * @param $id int id de l'article
     *
     * @return Article l'article demandé
     */
    public function findById($id){


        return Article::find($id);
    }


    /**
     * Permet de renvoyer une collection d'articles en fonction du titre.
     *
     * @param $titre string une partie du titre.
     *
     * @return Collection retourne une collection d'article
     */
    public function findByTitre($titre){
        return Article::where('titre', 'LIKE', '%'.$titre.'%')->get();
    }


    /**
     * retourne un tableau de tous les articles dans la base de donnees
     *
     * @return array liste des articles
     */
    public function all(){
        return Article::all();
    }


}