<?php

/**
 * Class PaymenttypesTable
 */
class ReservationsTable
{
    // 1 déclarer les propriétés (attributs)
    private $ResNo = "";
    private $Lastname = "";
    private $Firstname = "";
    private $Address = "";
    private $City = "";
    private $State = "";
    private $Postal = "";
    private $Phone = "";
    private $Payment = "";
    private $Amount = "";
    private $Hotel = "";
    private $Room = "";
    private $DateIn = "";
    private $DateOut = "";
    private $DateNow = "";


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
    public function getResNo()
    {
        return $this->ResNo;
    }

    /**
     * @param string $ResNo
     */ 
    public function setResNo($ResNo)    
    {
        $this->ResNo = $ResNo;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->Lastname;
    }

    /**
     * @param string $Lastname
     */
    public function setLastname($Lastname)
    {
        $this->Lastname = $Lastname;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->Firstname;
    }

    /**
     * @param string $Firstname
     */
    public function setFirstname($Firstname)
    {
        $this->Firstname = $Firstname;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     */
    public function setCity($City)
    {
        $this->City = $City;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $State
     */
    public function setState($State)
    {
        $this->State = $State;
    }

    /**
     * @return string
     */
    public function getPostal()
    {
        return $this->Postal;
    }

    /**
     * @param string $Postal
     */
    public function setPostal($Postal)
    {
        $this->Postal = $Postal;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
    }

    /**
     * @return string
     */
    public function getPayment()
    {
        return $this->Payment;
    }  

    /**
     * @param string $Payment
     */
    public function setPayment($Payment)
    {
        $this->Payment = $Payment;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param string $Amount
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
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
    public function setRoom($Room)
    {
        $this->Room = $Room;
    }

    /**
     * @return string
     */
    public function getDateIn()
    {
        return $this->DateIn;
    }

    /**
     * @param string $DateIn
     */
    public function setDateIn($DateIn)
    {
        $this->DateIn = $DateIn;
    }

    /**
     * @return string
     */
    public function getDateOut()
    {
        return $this->DateOut;
    }

    /**
     * @param string $DateOut
     */
    public function setDateOut($DateOut)
    {
        $this->DateOut = $DateOut;
    }

    /**
     * @return string
     */
    public function getDateNow()
    {
        return $this->DateNow;
    }

    /**
     * @param string $DateNow
     */
    public function setDateNow($DateNow)
    {
        $this->DateNow = $DateNow;
    }

}

