<?php
   // controller
    

$company = getCompany();
$people = getPeople();

function createTable($fetchFrom){
  while ($data = $fetchFrom->fetch()) {
    foreach($data as $value)
      {
      echo $value;
      //echo  $value['id_company'] . $value['name'] . $value['TVA'] . $value['country'];
      }
  }
}
