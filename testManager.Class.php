<?php
function ChargerClasse($classe)
{ /* si le fichier existe */
    if (file_exists("../MODEL/" . $classe . ".Class.php")) { /* on l'utilise */
        require "../MODEL/" . $classe . ".Class.php";
    } else { /* sinon on charge la Class */
        require "../CONTROLLER/" . $classe . ".Class.php";
    }
} /* on appel la fonction */
spl_autoload_register("ChargerClasse");

/* initialisation de la base de données */
DbConnect::init();


//**** VilleManager ****/

// ADD VilleManager : ok 
 //$m = new Ville(["nom"=>"lyon","numeroDepartement"=>69,"codePostal"=>"69000","dateMiseAJour"=>"13/05/2021"]);
//var_dump($m); 
 //VilleManager::add($m); 

// Update VilleManager : ok
// $m = VilleManager::findById(4);
// var_dump($m);
// $m->setNom("limoge");
// var_dump($m);
// VilleManager::update($m);

// Delete VilleManager : ok
// $m = VilleManager::findById(4);
// VilleManager::delete($m);

//Get Liste VilleManager : ok
 $tableau = VilleManager::getList();
 foreach ($tableau as $info)
 {
     echo $info->toString();
 }
