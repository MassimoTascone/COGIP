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
    ');
  return $data_company;
}

function getCompanyInvoiceDetails()
{
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query(
    'SELECT number, date, first_name, last_name FROM company 
    JOIN people ON id_company = fk_comp
    JOIN invoice ON id_company = fk_company
    ');
  return $data_company;
}

$companyPeopleDetails = getCompanyPeopleDetails();
$companyInvoiceDetails = getCompanyInvoiceDetails();

$peopleDetails = getData($companyPeopleDetails); 


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

  function getData($fetchFrom){
  return $fetchFrom->fetch();
  }

?>