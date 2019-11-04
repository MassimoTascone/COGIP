<?php 
// require la page Manager.php qui stocke la request SQL et connecte avec la BDD
require('model/Manager.php');


//Création des fonctions qui font des request sur la BDD
function getCompany()
{
  $conn = dbConnect();
  //cette ligne mpêche les doublons d'éléments dans l'affichage
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query('SELECT * FROM company');
  return $data_company;
}

function getPeople()
{
  $conn = dbConnect();
  //cette ligne empêche les doublons d'éléments dans l'affichage
   $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_people = $conn->query('SELECT * FROM people');
  return $data_people;
}

function getInvoice()
{
  $conn = dbConnect();
   //cette ligne empêche les doublons d'éléments dans l'affichage
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
  $data_invoice = $conn->query(
    'SELECT id_invoice, number, date, name, country, type
     FROM invoice 
     JOIN company ON fk_company = id_company
     JOIN type_company');
  return $data_invoice;
}
