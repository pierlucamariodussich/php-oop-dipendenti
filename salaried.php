<?php

require_once("employee.php");

class Salaried extends Employee{
    
   private $work_day;
   private $pay_by_day;

   public function __construct($init_salaried){
       parent::__construct($init_salaried);

       if(!is_numeric($init_salaried["work_day"])){
        throw new Exception("Non hai inserito un numero");
        }
        if($init_salaried["work_day"] > 31){
            throw new Exception("Inserisci un numero di giorni  minore uguale di 31");
        }
        if(!is_numeric($init_salaried["pay_by_day"])){
            throw new Exception("Non hai inserito un numero");
        }
        if($init_salaried["pay_by_day"] < 60){
            throw new Exception("Inserisci una paga maggiore di 60");
        }

       $this->work_day = $init_salaried["work_day"];
       $this->pay_by_day = $init_salaried["pay_by_day"];
       
       $this->total_pay(); 

   }
 
   private function total_pay(){
       $this->pay = $this->work_day *  $this->pay_by_day ;
   }
}












?>