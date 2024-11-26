<?php
/**
 *  Class PaymenttypesModele
 * 	Classe héritée de la classe abstraite Modele (modele.php)
 *
 */

class PaymenttypesModele extends modele
{
    private $parametre = array(); //tableau


    function __construct($parametre)
    {

        $this->parametre = $parametre;
    }


    public function getListePaymenttypes()
    {

        $sql = "SELECT * FROM paymenttypes";

        $resultat = $this->executeRequete($sql);


       if ($resultat->rowCount() > 0) {

            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

                $listePaymenttypes[] = new PaymenttypesTable($row);

            }

            return $listePaymenttypes;

        } else {

            return null;
        }


    }

    public function getUnPaymenttypes(){
        
        $sql = "SELECT * FROM paymenttypes WHERE Payment = ?";

        $resultat = $this->executeRequete($sql, array($this->parametre['Payment']));

        $unPaymenttype = new PaymenttypesTable($resultat->fetch(PDO::FETCH_ASSOC));

        return $unPaymenttype;

    }

    public function updateUnPaymenttypes(){
        
        $sql = "UPDATE paymenttypes SET Description = ?  WHERE Payment = ?";

        $resultat = $this->executeRequete($sql, array($this->parametre['Description'],$this->parametre['Payment']));

        $unPaymenttype = new PaymenttypesTable($resultat->fetch(PDO::FETCH_ASSOC));

        return $unPaymenttype;

    }

    public function deleteUnPaymenttypes(){
            
            $sql = "DELETE FROM paymenttypes WHERE Payment = ?";
    
            $resultat = $this->executeRequete($sql, array($this->parametre['Payment']));
    
            $unPaymenttype = new PaymenttypesTable($resultat->fetch(PDO::FETCH_ASSOC));
    
            return $unPaymenttype;
    }

    public function insertUnPaymenttypes(){
        $lastId = "SELECT MAX(Payment) FROM paymenttypes";
        $resultatId = $this->executeRequete($lastId);
        $idPayment = $resultatId->fetch(PDO::FETCH_ASSOC);
        $idPayment = $idPayment['MAX(Payment)'] + 1;

        $sql = "INSERT INTO paymenttypes (Payment, Description) VALUES (?, ?)";

        $resultat = $this->executeRequete($sql, array($idPayment, $this->parametre['Description']));

        $unPaymenttype = new PaymenttypesTable($resultat->fetch(PDO::FETCH_ASSOC));

        return $unPaymenttype;

    }
    

}
