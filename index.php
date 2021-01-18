<?php 

class Person 
{
 protected $name;
 protected $surname;
 protected $fiscal_code;

 public function __construct ($name, $surname, $fiscal_code)
   {
     $this->name = $name;
     $this->surname = $surname;
     $this->fiscal_code = $fiscal_code;
   }

 public function to_string() 
   {
       echo "<p> Nome: ".$this->name." | Cognome: ".$this->surname." | Codice Fiscale: ".$this->fiscal_code." </p>";
   } 


};

class Employee extends Person
{

  protected $employee_code;
  private $pay;

  public function __construct ($name, $surname, $fiscal_code, $employee_code)
   {
    parent::__construct($name,$surname,$fiscal_code);
    $this->employee_code = $employee_code;
   }
 
  public function totalpay()
  {
      return $this->pay;
  }

  public function to_string() 
   {
       echo "<p> Nome: ".$this->name." | Cognome: ".$this->surname." | Codice Fiscale: ".$this->fiscal_code." | Codice impiegato: ".$this->employee_code." | Compenso: ".$this->totalpay()."€ </p>";
   } 

};

class Salaried extends Employee
{
  private $days;
  private $daily_pay;


  public function __construct ($name, $surname, $fiscal_code,$employee_code, $days, $daily_pay)
   {
     parent::__construct($name,$surname,$fiscal_code,$employee_code);
     $this->days = $days;
     $this->daily_pay = $daily_pay;
   }

  public function totalpay() 
     {
        return $this->daily_pay * $this->days;
     }


};

class By_hour extends Employee
{
  private $hour;
  private $hour_pay;

  public function __construct ($name, $surname, $fiscal_code,$employee_code, $hour, $hour_pay)
   {
     parent::__construct($name,$surname,$fiscal_code,$employee_code);
     $this->hour = $hour;
     $this->hour_pay = $hour_pay;
   }

  public function totalpay() 
     {
        return $this->hour_pay * $this->hour;
     }

};

trait Project
{
  protected $project_name;
  private $project_pay;

 public function totalpay()
  {
    return $this ->project_pay ;
  }
  

};

class By_project extends Employee
{
    use Project;

    public function __construct ($name, $surname, $fiscal_code,$employee_code, $project_name,$project_pay)
   {
     parent::__construct($name,$surname,$fiscal_code,$employee_code);
     $this->project_name = $project_name;
     $this->project_pay = $project_pay;
   }

};



$diego_bianchi = new Salaried ("Diego","Bianchi","DGOBNC78G15E472P","102_DG", 20, 10);
$diego_bianchi -> to_string();
$chiara_martino = new By_hour ("Chiara", "Martino","CHRMRT87T11E472P","103_CH", 3, 5 );
$chiara_martino -> to_string();
$pedro_sanchez = new By_project ("Pedro","Sanchez", "XXXXXXXXXXXXX", "104_PS_EX","website",1000);
$pedro_sanchez -> to_string();



?>