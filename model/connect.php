<?php

// connect à la base de donées (model)

$conn = new PDO('mysql:host=localhost;dbname=cogip', 'root', '');
    try {
        $conn;
        }
        catch(Execption $e) {
              die('erreur :' . $e->getMessage());    
        }

// request résultats de la BDD (model)
$data = $conn->query ('SELECT * FROM people')->fetchAll();

$data_company = $conn->query('SELECT * FROM company')->fetchAll();

?>
