<?php

class RoomsControleur
{
    private $parametre = array(); //tableau
    private $oModele; // Object
    private $oVue; // Object

    public function __construct($parametre)
    {
        $this->parametre = $parametre;

        $this->oModele = new RoomsModele($parametre);
        $this->oVue = new RoomsVue($parametre);
    }

    public function lister()
    {
        $valeurs = $this->oModele->getListRooms();
        $this->oVue->genererAffichageRooms($valeurs);
    }

    public function form_consulter()
    {
        $valeurs = $this->oModele->getUneRoom();
        $action = $_POST["action"];
        $this->oVue->genererAffichageFiche($valeurs, $action);
    }

    public function form_modifier()
    {
        $valeurs = $this->oModele->getUneRoom();
        $action = $_POST["action"];
        $this->oVue->genererAffichageFiche($valeurs, $action);
    }

    public function form_supprimer()
    {
        $valeurs = $this->oModele->getUneRoom();
        $action = $_POST["action"];
        $this->oVue->genererAffichageFiche($valeurs, $action);
    }

    public function form_ajouter()
    {
        $valeurs = new RoomsTable();
        $action = $_POST["action"];
        $this->oVue->genererAffichageFiche($valeurs, $action);
    }

    public function modifier()
    {
        $this->oModele->updateUneRoom();
        $this->lister();
    }

    public function ajouter()
    {
        $this->oModele->insertUneRoom();
        $this->lister();
    }

    public function supprimer()
    {
        $this->oModele->deleteUneRoom();
        $this->lister();
    }
}