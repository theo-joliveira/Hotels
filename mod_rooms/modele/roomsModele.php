<?php

class RoomsModele extends modele
{
    private $parametre = array(); //tableau


    function __construct($parametre)
    {

        $this->parametre = $parametre;
    }


    public function getUneRoom()
    {

        $sql = "SELECT * FROM rooms WHERE RoomNo = ?";
        $resultat = $this->executeRequete($sql, array($this->parametre['RoomNo']));
        $uneRoom = new RoomsTable($resultat->fetch(PDO::FETCH_ASSOC));
        return $uneRoom;

    }

    public function getListRooms() :array{
            
        $sql = "SELECT * FROM rooms";

        $resultat = $this->executeRequete($sql);


       if ($resultat->rowCount() > 0) {

            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

                $uneRoom[] = new RoomsTable($row);
            }

            return $uneRoom;

        } else {

            return null;
        }

    }

    public function updateUneRoom(){
            
        $sql = "UPDATE rooms SET Hotel = ?, Room = ?, RoomType = ?, Price = ?, Comments = ?, RoomStatus = ? WHERE RoomNo = ?";
        $resultat = $this->executeRequete($sql, array($this->parametre['Hotel'], $this->parametre['Room'], $this->parametre['RoomType'], $this->parametre['Price'], $this->parametre['Comments'], $this->parametre['RoomStatus'], $this->parametre['RoomNo']));    
        $uneRoom = new RoomsTable($resultat->fetch(PDO::FETCH_ASSOC));
    
        return $uneRoom;
    }

    public function deleteUneRoom(){
                
            $sql = "DELETE FROM rooms WHERE RoomNo = ?";
        
            $resultat = $this->executeRequete($sql, array($this->parametre['RoomNo']));
        
            return $resultat;
    }

    public function insertUneRoom(){
        $lastId = "SELECT MAX(RoomNo) FROM rooms";
        $resultatId = $this->executeRequete($lastId);
        $idRoomNo = $resultatId->fetch(PDO::FETCH_ASSOC);
        $idRoomNo = $idRoomNo['MAX(RoomNo)'] + 1;

        $sql = "INSERT INTO Rooms (RoomNo, Hotel, Room, RoomType, Price, Comments, RoomStatus) VALUES (?,?,?,?,?,?,?)";

        $resultat = $this->executeRequete($sql, array($idRoomNo, $this->parametre['Hotel'], $this->parametre['Room'], $this->parametre['RoomType'], $this->parametre['Price'], $this->parametre['Comments'], $this->parametre['RoomStatus']));
        $uneRoom = new RoomsTable($resultat->fetch(PDO::FETCH_ASSOC));
        return $uneRoom;
    }
}
