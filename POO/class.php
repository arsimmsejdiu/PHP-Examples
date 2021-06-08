<?php 
class Film {
    public $id;
    public $nom;
    public $realisateur;
    public $annee;

    function constructor($id, $nom, $realisateur, $annee) {
        $this->id = $id;
        $this->nom = $nom;
        $this->realisateur = $realisateur;
        $this->annee = $annee;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getId() {
        return $this->id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function getNom() {
        return $this->nom;
    }

    function setRealisateur($realisateur) {
        $this->realisateur = $realisateur;
    }

    function getRealisateur() {
        return $this->realisateur;
    }

    function setAnnee($annee) {
        $this->annee = $annee;
    }

    function getAnne() {
        return $this->annee;
    }
}

$film = new Film();
$film->setId(1);
$film->setNom('Pursue of Happiness');
$film->setRealisateur('Will Smith');
$film->setAnnee(2000);

echo "The film " . $film->getNom() . " created by: " . $film->getRealisateur() . " year " . $film->getAnne();