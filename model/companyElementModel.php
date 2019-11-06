<?php
require('model/Manager.php');

function getCompanyName()
{
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query('SELECT name FROM company LIMIT 1');
  return $data_company;
}

function getCompanyTva()
{
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query('SELECT TVA FROM company LIMIT 1');
  return $data_company;
}

function getCompanyContacts()
{
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query('SELECT first_name, last_name, email FROM people JOIN company ON id_company = fk_comp');
  return $data_company;
}

function getCompanyInvoices()
{
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query('SELECT number, date, first_name, last_name FROM invoice JOIN people ON id_people = fk_people');
  return $data_company;
}

$companyName = getCompanyName();
$companyTVA = getCompanyTVA();
$companyContacts = getCompanyContacts();
$companyInvoices = getCompanyInvoices();


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