<?php


function getCompany() {
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query('SELECT name,TVA FROM company ORDER BY name');
  return $data_company;
}

function getPeople() {
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_people = $conn->query('SELECT id_people, first_name, last_name, email, name FROM people JOIN company ON fk_comp = id_company');
  return $data_people;
}

function getInvoice() {
    $conn = dbConnect();
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $data_invoice = $conn ->query('SELECT * FROM invoice');
    return $data_invoice;

}


function dbConnect()
{
        try {
            $conn = new PDO('mysql:host=database;dbname=cogip', 'root', 'root');
            return $conn;
            }
        catch(Execption $e) {
              die('erreur :' . $e->getMessage());    
        }
}
