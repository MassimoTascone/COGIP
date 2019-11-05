<?php

// connect à la base de donées (model)
require('model/Manager.php');

function getCompanyFournisseur()
{
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query('SELECT id_company, name, TVA, country FROM company JOIN type_company ON fk_type = id_type WHERE fk_type = 1');
  return $data_company;
}

function getCompanyClient()
{
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query('SELECT id_company, name, TVA, country FROM company JOIN type_company ON fk_type = id_type WHERE fk_type = 2');
  return $data_company;
}

$companyFournisseur = getCompanyFournisseur();
$companyClient = getCompanyClient();

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