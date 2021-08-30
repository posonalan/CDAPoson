<?php
class VilleManager
{
    public static function add(Ville $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO ville ( nom , numeroDepartement , codePostal , dateMiseAJour ) VALUES (:nom , :numeroDepartement , :codePostal , dateMiseAJour )");
        $q->bindValue(":nom", $obj->getNom());
        $q->bindValue("NumeroDepartement", $obj->getNumeroDepartement());
        $q->bindValue(":codePostal", $obj->getCodePostal());
        $q->bindValue(":dateMiseAJour", $obj->getDateMiseAJour());
        $q->execute();
    }

    public static function update(Ville $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE ville SET nom = :nom , numeroDepartement = :numeroDepartement , codePostal = :codePostal , dateMiseAJour WHERE idVille = :idVille");
        $q->bindValue(":idVille", $obj->getIdVille());
        $q->bindValue(":nom", $obj->getNom());
        $q->bindValue(":NumeroDepartement", $obj->getNumeroDepartement());
        $q->bindValue(":codePotal", $obj->getCodePostal());
        $q->bindValue(":dateMiseAJour", $obj->getDateMiseAJour());
        $q->execute();
    }

    public static function delete(Ville $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM ville WHERE idVille =". $obj->getIdVille());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM ville WHERE idVille=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Ville($results);
        } else {
            return false;
        }
    }

    
    public static function getList()
    {
        $db = DbConnect::getDb();
        $user = [];
        $q = $db->query("SELECT * FROM ville ");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $user[] = new Ville ($donnees);
            }
        }
        return $user;
    }
}
