<?php 
require_once('model/Manager.php');

function getInvoiceNum(){
    $conn = dbConnect();
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $data_invoice_name = $conn->query(
        'SELECT number
        FROM invoice
        LIMIT 1');
        return $data_invoice_name;
}

function getCompanyInvoice(){
$conn = dbConnect();
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
$data_company_invoice = $conn->query(
  'SELECT name, TVA, type
  FROM company
  JOIN type_company
  LIMIT 1');
return $data_company_invoice;
}

$invoiceNumber = getInvoiceNum();
$invoiceCompany = getCompanyInvoice();

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