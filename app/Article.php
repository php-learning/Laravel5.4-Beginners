<?php
/**
 * Created by IntelliJ IDEA.
 * User: sam
 * Date: 07/11/17
 * Time: 20:53
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

//
//    private $id;
//    private $titre;
//    private $description;
//    private $categorie_id;
//    private $created_at;
//    private $updated_at;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCategorieId()
    {
        return $this->categorie_id;
    }

    /**
     * @param mixed $categorie_id
     */
    public function setCategorieId($categorie_id)
    {
        $this->categorie_id = $categorie_id;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }




//    private $id;
//    private $titre;
//    private $description;
//
//    /**
//     * Article constructor.
//     * @param $id
//     * @param $titre
//     * @param $description
//     */
//    public function __construct($id, $titre, $description)
//    {
//        $this->id = $id;
//        $this->titre = $titre;
//        $this->description = $description;
//    }
//
//
//    /**
//     * @return mixed
//     */
//    public function getId()
//    {
//        return $this->id;
//    }
//
//    /**
//     * @param mixed $id
//     */
//    public function setId($id)
//    {
//        $this->id = $id;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getTitre()
//    {
//        return $this->titre;
//    }
//
//    /**
//     * @param mixed $titre
//     */
//    public function setTitre($titre)
//    {
//        $this->titre = $titre;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getDescription()
//    {
//        return $this->description;
//    }
//
//    /**
//     * @param mixed $description
//     */
//    public function setDescription($description)
//    {
//        $this->description = $description;
//    }


}