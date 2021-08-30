<?php
class Ville
{
    /******* Attributs *******/
    private $_idVille;
    private $_nom;
    private $_numeroDepartement;
    private $_codePostal;
    private $_dateMiseAJour;
  
    /******* Accesseurs *******/
    public function getIdVille()
    {
        return $this->_idVille;
    }
    public function setIdVille($_idVille)
    {
        $this->_idVille = $_idVille;
        return $this;
    }

    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom($_nom)
    {
        $this->_nom = $_nom;
        return $this;
    }

    public function getNumeroDepartement()
    {
        return $this->_numeroDepartement;
    }

    public function setNumeroDepartement($_numeroDepartement)
    {
        $this->_numeroDepartement = $_numeroDepartement;
        return $this;
    }

    public function getCodePostal()
    {
        return $this->_codePostal;
    }
    public function setCodePostal($_codePostal)
    {
        $this->_codePostal = $_codePostal;
        return $this;
    }

    public function getDateMiseAJour()
    {
        return $this->_dateMiseAJour;
    }
    public function setDateMiseAJour($_dateMiseAJour)
    {
        $this->_dateMiseAJour = $_dateMiseAJour;
        return $this;
    }
   
    /******* Construct *******/
    public function __construct(array $options = [])
    {
        if (!empty($options)) {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode]))) {
                $this->$methode($value);
            }
        }
    }

    /******* Autres methodes *******/
    public function toString()
    {
        return 'Identifiant Ville: ' . $this->getIdVille() . ' Nom de la ville: ' . $this->getNom() . ' Numero de departement: ' . $this->getNumeroDepartement() . ' Code postal : ' . $this->getCodePostal() . ' Date de mise a jour : ' . $this->getDateMiseAJour() .'.';
        
    }
}