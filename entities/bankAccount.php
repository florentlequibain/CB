<?php


// VERIF TYPE
declare(strict_types=1);


// CLASS BANKACCOUNT
class BankAccount{

protected $idAccount;
protected $name;
protected $amount;

// CONSTRUCT
public function __construct($data){
  $this -> hydrate($data);
}


// HYDRATE
public function hydrate($data){

  foreach ($data as $key => $value){
    $method = 'set'.ucfirst($key);

    if (method_exists($this, $method)){
      $this->$method($value);
      }
    }
  }

// GETTERS

    /**
     * Get the value of Id Account
     *
     * @return mixed
     */
    public function getIdAccount()
    {
        return $this->idAccount;
    }


    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }



    /**
     * Get the value of Amount
     *
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }


// SETTERS

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set the value of Amount
     *
     * @param mixed amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

}



 ?>
