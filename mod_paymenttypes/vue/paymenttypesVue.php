<?php


class PaymenttypesVue
{

    private $parametre = array(); //tableau
    private $tpl; // objet smarty



    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->tpl = new Smarty();

    }

    private function chargementValeurs() {

        $this->tpl->assign('login', 'Ici le nom de la personne identifiée');

        $this->tpl->assign('titreVue', 'Les Hôtels');

    }


    public function genererAffichagePaymenttypes($valeurs){


        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Liste des types de paiements');

        $this->tpl->assign('listePaymenttypes', $valeurs);

        $this->tpl->display('mod_paymenttypes/vue/paymenttypesListeVue.tpl');
    }



    public function genererAffichageFiche($valeurs, $action){


        $this->chargementValeurs();
        

        $this->tpl->assign('unPaiementtype', $valeurs);


        switch ($action) {

            case 'form_consulter' :

                $this->tpl->assign('titrePage', 'Fiche Type de Paiement : Consultation');
                $this->tpl->assign('BtnSubmit', '');
                $this->tpl->assign('readonly', 'readonly');
                $this->tpl->assign('action', 'consulter');
                break;

            case 'form_modifier' :

                $this->tpl->assign('titrePage', 'Fiche Type de Paiement : Modification');
                $this->tpl->assign('BtnSubmit', 'Modifier');
                $this->tpl->assign('readonly', '');
                $this->tpl->assign('action', 'modifier');
                break;

            case 'form_supprimer' :

                $this->tpl->assign('titrePage', 'Fiche Type de Paiement : Suppression');
                $this->tpl->assign('BtnSubmit', 'Supprimer');
                $this->tpl->assign('readonly', 'readonly');
                $this->tpl->assign('action', 'supprimer');
                break;

            case 'form_ajouter' :

                $this->tpl->assign('titrePage', 'Fiche Type de Paiement : Ajout');
                $this->tpl->assign('BtnSubmit', 'Ajouter');
                $this->tpl->assign('readonly', '');   
                $this->tpl->assign('action', 'ajouter');
                break;
            default;
            break;
        }
        

        $this->tpl->display('mod_paymenttypes/vue/paymenttypesFicheVue.tpl');

    }



}
