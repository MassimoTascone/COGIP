<?php

// connect à la base de donées (model)





// request résultats de la BDD (model)
//$data_people = $conn->query ('SELECT * FROM people')->fetchAll();

function getCompanyFournisseur()
{
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query('SELECT id_company, name, TVA, country, fk_type FROM company JOIN type_company ON fk_type = id_type WHERE fk_type = 1');
  return $data_company;
}


function getCompanyClient()
{
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_company = $conn->query('SELECT id_company, name, TVA, country, fk_type FROM company JOIN type_company ON fk_type = id_type WHERE fk_type = 2');
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