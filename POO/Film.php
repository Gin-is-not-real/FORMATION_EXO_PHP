<?php
$GLOBALS['nbr_id'] = 0;

class Film {
    private $id;
    private $nom;
    private $realisateur;
    private $annee;

    public function __construct($nom, $realisateur, $annee) {
        $this->id = $GLOBALS['nbr_id'];
        $this->nom = $nom;
        $this->realisateur = $realisateur;
        $this->annee = $annee;

        $GLOBALS['nbr_id'] ++;
    }

    public function getId() {
        return $this->id;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getRealisateur() {
        return $this->realisateur;
    }
    public function getAnnee() {
        return $this->annee;
    }

    public function setId($id) {
        $this->id = $id;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function setRealisateur($realisateur) {
        $this->realisateur = $realisateur;
    }
    public function setAnnee($annee) {
        $this->annee = $annee;
    }
}



