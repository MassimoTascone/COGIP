<?php 
require('model/Manager.php');

function getInvoiceNum(){
    $conn = dbConnect();
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $data_invoice_name = $conn->query(
        'SELECT number
        FROM invoice
        LIMIT 1');
        return $data_invoice_name;
}

$invoiceNumber = getInvoiceNum();

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