<?php
require('model/Manager.php');

function getCompanyName()
{
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query('SELECT name FROM company LIMIT 1');
  return $data_company;
}

function getTva()
{
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query('SELECT TVA FROM company LIMIT 1');
  return $data_company;
}


$companyName = getCompanyName();
$companyTVA = getTVA();


function createTable($fetchFrom){
    while ($data = $fetchFrom->fetch()) {
      echo "<tr>";
      foreach($data as $value)
        {
        echo "<td> $value </td>";
        }
      echo "</tr>";
    }
  }

?>