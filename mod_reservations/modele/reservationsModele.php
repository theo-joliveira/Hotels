<?php
/**
 *  Class PaymenttypesModele
 * 	Classe héritée de la classe abstraite Modele (modele.php)
 *
 */

class ReservationsModele extends modele
{
    private $parametre = array(); //tableau


    function __construct($parametre)
    {

        $this->parametre = $parametre;
    }


    public function getUneReservation()
    {

        $sql = "SELECT * FROM reservations WHERE ResNo = ?";
        $resultat = $this->executeRequete($sql, array($this->parametre['ResNo']));
        $uneReservation = new ReservationsTable($resultat->fetch(PDO::FETCH_ASSOC));
        return $uneReservation;

    }

    public function getListReservations() :array{
            
        $sql = "SELECT * FROM reservations";

        $resultat = $this->executeRequete($sql);


       if ($resultat->rowCount() > 0) {

            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

                $uneReservations[] = new ReservationsTable($row);
            }

            return $uneReservations;

        } else {

            return null;
        }

    }

    public function updateUneReservation(){
            
        $sql = "UPDATE reservations SET LastName = ?, FirstName = ?, Address = ?, City = ?, State = ?, Postal = ?, Phone = ?, Payment = ?, Amount = ?, Hotel = ?, Room = ?, DateIn = ?, DateOut = ? WHERE ResNo = ?";
        $resultat = $this->executeRequete($sql, array($this->parametre['LastName'], $this->parametre['FirstName'], $this->parametre['Address'], $this->parametre['City'], $this->parametre['State'], $this->parametre['Postal'], $this->parametre['Phone'], $this->parametre['Payment'], $this->parametre['Amount'], $this->parametre['Hotel'], $this->parametre['Room'], $this->parametre['DateIn'], $this->parametre['DateOut'], $this->parametre['ResNo']));    
        $uneReservation = new ReservationsTable($resultat->fetch(PDO::FETCH_ASSOC));
    
        return $uneReservation;
    }

    public function deleteUneReservation(){
                
            $sql = "DELETE FROM reservations WHERE ResNo = ?";
        
            $resultat = $this->executeRequete($sql, array($this->parametre['ResNo']));
        
            return $resultat;
    }

    public function insertUnereservation(){
        $lastId = "SELECT MAX(ResNo) FROM reservations";
        $resultatId = $this->executeRequete($lastId);
        $idResNo = $resultatId->fetch(PDO::FETCH_ASSOC);
        $idResNo = $idResNo['MAX(ResNo)'] + 1;

        $sql = "INSERT INTO reservations (ResNo, LastName, FirstName, Address, City, State, Postal, Phone, Payment, Amount, Hotel, Room, DateIn, DateOut) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $resultat = $this->executeRequete($sql, array($idResNo, $this->parametre['LastName'], $this->parametre['FirstName'], $this->parametre['Address'], $this->parametre['City'], $this->parametre['State'], $this->parametre['Postal'], $this->parametre['Phone'], $this->parametre['Payment'], $this->parametre['Amount'], $this->parametre['Hotel'], $this->parametre['Room'], $this->parametre['DateIn'], $this->parametre['DateOut']));
        $uneReservation = new ReservationsTable($resultat->fetch(PDO::FETCH_ASSOC));
        return $uneReservation;
    }
}
