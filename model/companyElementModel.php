<?php
require_once('model/Manager.php');


function getCompanyPeopleDetail(){
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query(
    'SELECT name, TVA, type, first_name, last_name, email FROM company
    JOIN type_company ON id_type = fk_type
    JOIN people ON id_company = fk_comp
    WHERE id_company ='.$id);
  return $data_company;
  }
}

function getCompanyInvoiceDetail(){
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query(
    'SELECT number, date, first_name, last_name FROM company 
    JOIN people ON id_company = fk_comp
    JOIN invoice ON id_company = fk_company
    WHERE id_company ='.$id);
  return $data_company;
  }
}





$companyPeopleDetail = getCompanyPeopleDetail();
$companyInvoiceDetail = getCompanyInvoiceDetail();

$peopleDetail = getData($companyPeopleDetail); 


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