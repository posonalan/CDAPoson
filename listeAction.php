<?php
//  var_dump($_POST);

$p = new Ville($_POST);
//  var_dump($p);
switch ($_GET["act"])
{
   /* case "ajout":
        VilleManager::add($p); 
        break;*/
    case "modif":
        VilleManager::update($p);/* nous n'avons besoin que de modif pour ce projet */ 
        break;
   /* case "suppr":
        VilleManager::delete($p);
        break;*/
}
header("location:index.php?action=confirmation");
//header("refresh:3;url=index.php?action=confirmation");