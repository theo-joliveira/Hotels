<?php
class RoomsTable{
    
    private $RoomNo ="";
    private $Hotel ="";
    private $Room ="";
    private $RoomType ="";
    private $Price ="";
    private $Comments ="";
    private $RoomStatus ="";

    // 2 importer la méthode hydrater !
    public function hydrater(array $row) {

        foreach ($row as $k => $v) {
            // Concaténation : nom de la méthode setter à appeler
            $setter = 'set' . ucfirst($k);
            // fonction prend 2 paramètres : l'objet en cours et le nom de la méthode
            if (method_exists($this, $setter)) {
                // Invoquer la méthode
                $this->$setter($v);
            }
        }
    }

    // 3 puis  le constructeur !
    public function __construct($data = null) {

        if ($data != null) {

            $this->hydrater($data);
        }
    }

    // 4 ALT + INSER pour générer setter et getter !

    /**
     * @return string
     */
    public function getRoomNo()
    {
        return $this->RoomNo;
    }

    /**
     * @param string $RoomNo
     */

    public function setRoomNo($RoomNo)
    {
        $this->RoomNo = $RoomNo;
    }

    /**
     * @return string
     */ 

     public function getHotel()
    {
        return $this->Hotel;
    }
    
    /**
     * @param string $Hotel
     */

    public function setHotel($Hotel)
    {
        $this->Hotel = $Hotel;
    }

    /**
     * @return string
     */
    public function getRoom()
    {
        return $this->Room;
    }

    /**
     * @param string $Room
     */

    public function setRoom($Room){
        $this->Room = $Room;
    }

    /**
     * @return string
     */ 
    public function getRoomType()
    {
        return $this->RoomType;
    }

    /**
     * @param string $RoomType
     */

    public function setRoomType($RoomType)
    {
        $this->RoomType = $RoomType;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param string $Price
     */

    public function setPrice($Price)
    {
        $this->Price = $Price;
    }

    /**
     * @return string
     */

    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param string $Comments
     */

    public function setComments($Comments)
    {
        $this->Comments = $Comments;
    }

    /**
     * @return string
     */

    public function getRoomStatus()
    {
        return $this->RoomStatus;
    }

    /**
     * @param string $RoomStatus
     */

    public function setRoomStatus($RoomStatus)
    {
        $this->RoomStatus = $RoomStatus;
    }
    

}