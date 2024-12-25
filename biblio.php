<?php
class Livre {
    private $titre;
    private $auteur;
    private $barcode;
    private $disponible;

    public function __construct($titre, $auteur, $barcode) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->barcode = $barcode;
        $this->disponible = true;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getBarcode() {
        return $this->barcode;
    }

    public function estDisponible() {
        return $this->disponible;
    }

    public function emprunter() {
        if ($this->disponible) {
            $this->disponible = false;
            return true;
        }
        return false;
    }

    public function retourner() {
        $this->disponible = true;
    }
}