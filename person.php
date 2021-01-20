<?php 
 
 class Person{

    private $name;
    private $surname;
    private $fiscal_code;

    public function __construct($name, $surname, $fiscal_code){ 
        if(!is_string($name)){
            throw new Exception("Inserisci un nome non un numero");
        }
        if($name == ""){
            throw new Exception("Il campo nome non può essere vuoto");
        }
        if(!is_string($surname)){
            throw new Exception("Inserisci un Cognome non un numero");
        }
        if($surname == ""){
            throw new Exception("Il campo cognome non può essere vuoto");
        }
        if(strlen($surname) < 2){
            throw new Exception("Inserisci un Cognome valido");
        }
        if($fiscal_code == ""){
            throw new Exception("Il campo codice fiscale non non può essere vuoto");
        }
        if(strlen($fiscal_code) < 16){
            throw new Exception("Il codice fiscale non contiene 16 cifre");
        }
        $this->name = $name;
        $this->surname = $surname;
        $this->fiscal_code = $fiscal_code;
    }

public function to_string(){
$string = " 
         Nome:". $this->name ." |
         Cognome:". $this->surname." |
         Codice Fiscale:". $this->fiscal_code." | ";
return $string;
}

}















?>