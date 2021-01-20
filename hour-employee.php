<?php 

require_once("employee.php");

class ByHour extends Employee{
    
   private $work_hour;
   private $pay_by_hour;

   public function __construct($init_e_by_hour){
       parent::__construct($init_e_by_hour);

       if(!is_numeric($init_e_by_hour["work_hour"])){
        throw new Exception("Non hai inserito un numero");
        }
        if(!is_numeric($init_e_by_hour["pay_by_hour"])){
            throw new Exception("Non hai inserito un numero");
        }
        if($init_e_by_hour["pay_by_hour"] < 7.50){
            throw new Exception("Inserisci una paga maggiore di 7.50€");
        }

       $this->work_hour = $init_e_by_hour["work_hour"];
       $this->pay_by_hour = $init_e_by_hour["pay_by_hour"];
       
       $this->total_pay(); 

   }
 
   private function total_pay(){
       $this->pay = $this->work_hour *  $this->pay_by_hour ;
   }
}















?>