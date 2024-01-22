<?php

class Chat
{
    private $id;
    private $nom;
    private $age;
    private $couleur;


    public function __construct(array $data) {
        $this->id = $data['id'];
        $this->nom = $data['nom'];
        $this->age = $data['age'];
        $this->couleur = $data['couleur'];
    }

    public function getNom() {
        return $this->nom;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function getCouleur() {
        return $this->couleur;
    }

}





