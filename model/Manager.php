<?php


// connect à la base de donées (model)
function dbConnect()
{
        try {
            $conn = new PDO('mysql:host=localhost;dbname=cogip', 'root', '');
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $conn;
            }
        catch(Exception $e) {
              die('erreur :' . $e->getMessage());    
        }
}
