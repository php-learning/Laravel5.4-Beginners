<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 21/11/17
 * Time: 20:58
 */

namespace App\Metier;


use App\Article;

class MetierArticle
{

    /**
     * MetierArticle constructor.
     */
    public function __construct()
    {
        $articles = session()->get('articles', null);

        if (is_null($articles)) {
            $this->add("mon article", "mqkjeflkqfjlnqzklf eqlfnlkqefks");
        }
    }

    /**
     * Methode pour enregistrer l'article quelque part (session, bdd, fichier, ....)
     * @param $titre string Titre de l'article
     * @param $description string Description de l'article
     * @return bool
     */
    public function add($titre, $description)
    {
        if(is_null($titre) || is_null($description)){
            return false;
        }

        $article = new Article(uniqid(), $titre, $description);

        try{
            //on stocke dans la session
            //un tableau d'articles avec en clé l'id
//            session()->put('articles.'.$article->getId(), $article);
            $article->save();

        }catch(\Exception $exception){
            return false;
        }

        return true;
    }

    /**
     * recuperation de l'article par l'id
     *
     * @param $id
     * @return Article
     */
    public function get($id){
        return session()->get('articles.'.$id, null);
    }

    public function all(){
        return session()->get('articles');
    }


}