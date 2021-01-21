<?php 

require_once("person.php");

class Employee extends Person{
   
    private $employee_code;
    protected $pay;

    public function __construct($init_employee){

        parent::__construct(
            $init_employee['name'],
            $init_employee['surname'],
            $init_employee['fiscal_code']
        );
        
        if(count($init_employee) < 4){
            throw new Exception("I campi name,surname,fiscal code e employee code sono obbligatori");
        }
        if((strlen($init_employee['employee_code']) <= 5) && (!is_numeric($init_employee['employee_code']))){
            throw new Exception("Il codice non contiene 5 cifre ");
        }
        // if(!is_numeric($init_employee['employee_code'])){
        //     throw new Exception("Il codice deve essere un numero");
        // }

        $this->employee_code = $init_employee['employee_code'];
        $this->total_pay();
    }

    private function total_pay(){
        $this->pay = null;
    }

    public function to_string(){
        $string = parent::to_string();
        $string .= <<<EOT
        Codice impiegato : $this->employee_code |
        Compenso : $this->pay €
        EOT;
        return $string;
    }

}
















?>