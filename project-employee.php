<?php 

require_once("employee.php");

trait Project {
  
  private $project_name;
  protected $project_pay;

  public function to_string(){
    $str = parent::to_string();
    $str .= " | Progetto: ". $this->project_name;
    return $str;
   }

};

class ByProject extends Employee{

    use Project;
    
    public function __construct($init_by_project, $project_name, $project_pay){


        parent::__construct($init_by_project);

        if(!is_string($project_name)){
            throw new Exception('Project Name non è una stringa');
        }
        if(!is_numeric($project_pay)){
            throw new Exception('Inserisci un numero');
        }

        $this->project_name = $project_name;
        $this->project_pay = $project_pay;

        $this->total_pay();

    }
    
    private function total_pay(){
        $this->pay = $this->project_pay;
    }

}




?>