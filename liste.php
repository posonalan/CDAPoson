<?php

$listeVille = VilleManager::getList();
$id = (isset($_SESSION['id'])) ? (int) $_SESSION['id'] : 0;
$nomVille = (isset($_SESSION['nom'])) ? $_SESSION['nom'] : '';
$numeroDepartement = (isset($_SESSION['numeroDepartement'])) ? $_SESSION['numeroDepartement'] : '';


$affichage ='

<div class="ville">
            <div class="inter">
                <img class="LogoVille" src="../IMAGE/logoLyon.png" alt="logo ville">
                <div class="nomVille">
                    <h4>' . $ville->getNomVille() . '</h4>
                </div>
                <div class="numVille">
                    <h3>'. $ville->getNumeroVille() .'</h3>
                </div>
                <div class="codePostal">
                    <h4>'. $ville->getCodePostal() .'</h4>
                </div>
                <div class="dateMAJ">
                    <h4>'. $ville->getDateMiseAJour() .'</h4>
                </div>
                <input type="submit" value="modifier" />
                <input type="submit" value="supprimer" />
            </div>
        </div>

    
       ';  
    

          echo $affichage;  


       