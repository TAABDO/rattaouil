<?php

include "Etudiant.php";





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $age = htmlspecialchars($_POST['age']);
    $newEtudain = new Etudiant($nom , $prenom ,$age);
    $newEtudain->afficherEtudinat();
}






