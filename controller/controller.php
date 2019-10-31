<?php
   // controller
    
require('model/connect.php');

    foreach($data_people as $row)
      {
      echo '<p>Firstname : ' . $row['first_name'] . ', Lastname : '.$row['last_name'] . ' Email adress : ' . $row['email'] .'</p>'; 
            } 

    foreach($data_company as $company)
      {
       echo '<p>' . $company['id_company'] . $company['name'] . $company['TVA'] . $company['country'] .'</p>';
      }
