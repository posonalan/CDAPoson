<?php

$listeVille = VilleManager::getList();
$id = (isset($_SESSION['id'])) ? (int) $_SESSION['id'] : 0;
$nomVille = (isset($_SESSION['nom'])) ? $_SESSION['nom'] : '';
$numeroDepartement = (isset($_SESSION['numeroDepartement'])) ? $_SESSION['numeroDepartement'] : '';



?>