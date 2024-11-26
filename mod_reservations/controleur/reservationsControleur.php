<?php

class ReservationsControleur
{
    private $parametre = array(); //tableau
    private $oModele; // Object
    private $oVue; // Object

    public function __construct($parametre)
    {
        $this->parametre = $parametre;

        $this->oModele = new ReservationsModele($parametre);
        $this->oVue = new ReservationsVue($parametre);
    }

    public function lister()
    {
        $valeurs = $this->oModele->getListReservations();
        $this->oVue->genererAffichageReservations($valeurs);
    }

    public function form_consulter()
    {
        $valeurs = $this->oModele->getUneReservation();
        $action = $_POST["action"];
        $this->oVue->genererAffichageFiche($valeurs, $action);
    }

    public function form_modifier()
    {
        $valeurs = $this->oModele->getUneReservation();
        $action = $_POST["action"];
        $this->oVue->genererAffichageFiche($valeurs, $action);
    }

    public function form_supprimer()
    {
        $valeurs = $this->oModele->getUneReservation();
        $action = $_POST["action"];
        $this->oVue->genererAffichageFiche($valeurs, $action);
    }

    public function form_ajouter()
    {
        $valeurs = new ReservationsTable();
        $action = $_POST["action"];
        $this->oVue->genererAffichageFiche($valeurs, $action);
    }

    public function modifier()
    {
        $this->oModele->updateUneReservation();
        $this->lister();
    }

    public function ajouter()
    {
        $this->oModele->insertUneReservation();
        $this->lister();
    }

    public function supprimer()
    {
        $this->oModele->deleteUneReservation();
        $this->lister();
    }
}