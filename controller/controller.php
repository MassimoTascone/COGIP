<?php
   // controller
    

$company = getCompany();
$people= getPeople();
$invoice = getInvoice();


function createTable($fetchFrom){
  while ($data = $fetchFrom->fetch()) {
      
      echo '<tr>';
      echo '<a href="#">';
      foreach($data as $key => $value){
        echo "<td> $value </td>";
      }
      echo "<td><a href='#'>More Info</a></td>";

      echo '</a>';
      echo '<tr>';
      }
  }
