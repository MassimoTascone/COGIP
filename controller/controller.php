<?php

// Variables qui encglobent les fonctions crées en model
$company = getCompany();
$people = getPeople();
$invoice = getInvoice();

// Une fonction qui met en forme les données qu'on lui demande
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
