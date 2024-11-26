<?php


class PaymenttypesControleur
{

    private $parametre = array(); //tableau
    private $oModele; // Object
    private $oVue; // Object

    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->oModele = new PaymenttypesModele($parametre);

        $this->oVue = new PaymenttypesVue($parametre);
    }

    public function lister(){

        $valeurs = $this->oModele->getListePaymenttypes();

        $this->oVue->genererAffichagePaymenttypes($valeurs);

    }

    public function form_consulter(){

        $valeurs = $this->oModele->getUnPaymenttypes();

        $action = $_POST["action"];

        $this->oVue->genererAffichageFiche($valeurs, $action);


    }

    public function form_modifier(){

        $valeurs = $this->oModele->getUnPaymenttypes();

        $action = $_POST["action"];


        $this->oVue->genererAffichageFiche($valeurs, $action);
    }

    public function form_supprimer(){

        $valeurs = $this->oModele->getUnPaymenttypes();

        $action = $_POST["action"];

        $this->oVue->genererAffichageFiche($valeurs, $action);
    }

    public function form_ajouter(){
            
        $valeurs = "";
    
        $action = $_POST["action"];
    
        $this->oVue->genererAffichageFiche($valeurs, $action);
    }

    public function modifier(){

        $this->oModele->updateUnPaymenttypes();

        $this->lister();
    }

    public function ajouter(){

        $this->oModele->insertUnPaymenttypes();

        $this->lister();
    }

    public function supprimer(){

        $this->oModele->deleteUnPaymenttypes();

        $this->lister();
    }
    
}
