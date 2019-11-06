<?php

// connect à la base de donées (model)





// request résultats de la BDD (model)
//$data_people = $conn->query ('SELECT * FROM people')->fetchAll();

function getCompany()
{
  $conn = dbConnect();
  $data_company = $conn->query('SELECT name,TVA FROM company ORDER BY name LIMIT 2');
  return $data_company;
}

function getPeople()
{
  $conn = dbConnect();
  $data_people = $conn->query('SELECT * FROM people LIMIT 2');
  return $data_people;
}

function dbConnect()
{
        try {
            $conn = new PDO('mysql:host=ldatabase;dbname=cogip', 'root', '');
            return $conn;
            }
        catch(Execption $e) {
              die('erreur :' . $e->getMessage());    
        }
}
