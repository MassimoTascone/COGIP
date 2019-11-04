<?php
   // controller
    
    //foreach($data_people as $row)
      //{
      //echo '<p>Firstname : ' . $row['first_name'] . ', Lastname : '.$row['last_name'] . ' Email adress : ' . $row['email'] .'</p>'; 
           // } 

    //foreach($data_company as $company)
      //{
       //echo '<p>' . $company['id_company'] . $company['name'] . $company['TVA'] . $company['country'] .'</p>';
      //}

$company = getCompany();
$people = getPeople();


function createTable($fetchFrom){
  while ($data = $fetchFrom->fetch()) {
    echo "<tr>";
    foreach($data as $value)
      {
      echo "<td> $value </td>";

      //echo  $value['id_company'] . $value['name'] . $value['TVA'] . $value['country'];
      }
    echo "</tr>";
  }
}