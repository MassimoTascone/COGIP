<?php 
// call for Manager.php
require_once('model/Manager.php');

// grabbing each invoice's detail
function getDetailInvoice(){
$conn = dbConnect();
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
$data_company_invoice = $conn->query(
 'SELECT number, name, TVA, type, first_name, last_name, email
  FROM company
  JOIN invoice ON fk_company = id_company 
  JOIN type_company ON fk_type = id_type
  JOIN people ON fk_people = id_people
  WHERE id_type = 1');
return $data_company_invoice;
}

$invoiceCompany = getDetailInvoice();

// fetching between all invoice's elements 
function createTable($fetchFrom){
    while ($data = $fetchFrom->fetch()) {
      echo "<tr>";
      foreach($data as $key => $value)
        {
        echo "<td> $value </td>"; 
        }
      echo "</tr>";
    }
  }