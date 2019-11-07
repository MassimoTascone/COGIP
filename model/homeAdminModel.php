<?php
require_once('model/Manager.php');

// Last 5 entries from each category

function getInvoiceAdmin()
{
    $conn = dbConnect();
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $data_invoice_admin = $conn->query(
        'SELECT id_invoice, number, date, name
        FROM invoice
        JOIN company ON fk_company = id_company
        ORDER BY id_invoice DESC
        LIMIT 5');
        return $data_invoice_admin;
}

function getContactsAdmin()
{
    $conn = dbConnect();
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $data_contact_admin = $conn->query(
        'SELECT id_people, first_name, last_name, email, name
        FROM people
        JOIN company ON fk_comp = id_company
        ORDER BY id_people DESC
        LIMIT 5');
        return $data_contact_admin;
}

function getCompanyAdmin()
{
    $conn = dbConnect();
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $data_company_admin = $conn->query(
        'SELECT id_company, name, TVA, country, id_type
        FROM company
        JOIN type_company ON id_type
        ORDER BY id_company DESC
        LIMIT 5');
        return $data_company_admin;
}

$invoiceAdmin = getInvoiceAdmin();
$contactAdmin = getContactsAdmin();
$companyAdmin = getCompanyAdmin();


function createTable($fetchFrom){
    while ($data = $fetchFrom->fetch()) {
      echo "<tr>";
      foreach($data as $key => $value){
        echo "<td> $value </td>";
    }
      echo "</tr>";
    }
  }