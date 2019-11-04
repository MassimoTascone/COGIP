<?php

// Variables qui englobent les fonctions crées en model
$company = getCompany();
$people = getPeople();
$invoice = getInvoice();

// Une fonction qui crée un Loop et met en forme les données qu'on lui demande
function createTable($fetchFrom){
  while ($data = $fetchFrom->fetch()) {
    echo "<tr>";
    foreach($data as $key => $value)
      {
      echo "<td> $value </td>";
      
      }
    echo "<td><a href=#>more info</a></td>" ;
    echo "</tr>";
  }
}
