<?php
/**
 * Created by IntelliJ IDEA.
 * User: sam
 * Date: 07/11/17
 * Time: 20:53
 */

namespace MonPetitPoney;


class Article
{
    private $id;
    private $titre;
    private $description;

    /**
     * Article constructor.
     * @param $id
     * @param $titre
     * @param $description
     */
    public function __construct($id, $titre, $description)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
    }


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



}