<?php
require_once('model/Manager.php');


function getCompanyPeopleDetails()
{
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query(
    'SELECT name, TVA, type, first_name, last_name, email FROM company 
    JOIN type_company ON id_type = fk_type
    JOIN people ON id_company = fk_comp
    LIMIT 1');
  return $data_company;
}

function getCompanyInvoiceDetails()
{
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query(
    'SELECT number, date, name first_name, last_name FROM company 
    JOIN people ON id_company = fk_comp
    JOIN invoice ON id_company = fk_company
    LIMIT 1');
  return $data_company;
}

$companyPeopleDetails = getCompanyPeopleDetails();
$companyInvoiceDetails = getCompanyInvoiceDetails();



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