<?php

// connect à la base de donées (model)





// request résultats de la BDD (model)
//$data_people = $conn->query ('SELECT * FROM people')->fetchAll();

function getCompany()
{
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query('SELECT * FROM company');
  return $data_company;
}

function getPeople()
{
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_people = $conn->query('SELECT * FROM people');
  return $data_people;
}

function dbConnect()
{
        try {
            $conn = new PDO('mysql:host=localhost;dbname=cogip', 'root', '');
            return $conn;
            }
        catch(Execption $e) {
              die('erreur :' . $e->getMessage());    
        }
}