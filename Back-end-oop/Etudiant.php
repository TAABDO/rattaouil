<?php

class Etudiant 
{

    private $nom; 
    private $prenom;
    private $age;

    public function __construct($nom,$prenom,$age)
    {

        $this->name =$name;
        $this->prenom =$prenom;
        $this->age = $age;

    }


    public function getName()
    {
        return $this->name;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setName()
    {
        $this->name =$name;
    }

    public function setPrenom()
    {
        $this->prenom =$prenom;
    }
    public function setAge()
    {
        $this->age = $age;
    }


    public function afficherEtudinat()
    {
        echo " the name is : ".$this->nom . "the prenom is : ". $this->prenom . "the age is ". $this->age;
    }
}