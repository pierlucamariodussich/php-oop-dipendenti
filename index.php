<?php 

require("person.php");
require_once("employee.php");
require_once("salaried.php");
require_once("hour-employee.php");
require_once("project-employee.php");


$employee_data = [
    'name' => 'Pinco',
    'surname' => 'Pallo',
    'fiscal_code' => 'PNCPLL78S15E472P',
    'employee_code' => 10011
 ];

$salaried_employee = array_merge($employee_data, [
    'work_day' => 28,
    'pay_by_day' => 61
]);

$hour_employee = array_merge($employee_data, [
    'work_hour' => 300,
    'pay_by_hour' => 15
]);




try{
 $firstperson = new Person ("Diego","Bianchi", "XXXXXXXXXXXXXXXX");
 echo $firstperson-> to_string();
} catch (Exception $e){
 echo $e->getMessage();
}

?>  <br><br> <?php

try{
     $secondperson = new Employee($employee_data);
     echo $secondperson->to_string();
   } catch (Exception $e){
     echo $e->getMessage();
}

?> <br><br> <?php

try{
     $thirdperson = new Salaried ($salaried_employee);
     echo $thirdperson->to_string();
   } catch (Exception $e){
     echo $e->getMessage();
}

?> <br><br> <?php

try{
     $fourthperson = new ByHour ($hour_employee );
     echo $fourthperson->to_string();
   } catch (Exception $e){
     echo $e->getMessage();
}

?> <br><br> <?php

try{
     $projectperson = new ByProject ($employee_data, "Website", 1000 );
     echo $projectperson->to_string();
   } catch (Exception $e){
     echo $e->getMessage();
}

?>