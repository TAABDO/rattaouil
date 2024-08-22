<?php



class ManagerEtudiant

{

    private array $etudiants = [];


    public function ajouterEtudiant($etudiant)
    {
        $this->etudiants = $etudiant;
    }

    public function afficherEtudinat()
    {
        foreach($this->etudiants as $etudiant)
        {
            $this->etudiant->afficherEtudinat();
        }
    }

    public function supprimer($nom)
    {

        foreach($this->etudiants as $key=>$etudiant)
        {
            if($this->etudiant->getNom() == $nom)
            {
                unset($this->etudiants[$key]);
            }
        }

    }


}