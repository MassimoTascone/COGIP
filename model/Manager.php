<?php

// connect et request SQL à la base de donées (model)
function dbConnect()
{
        try {
            $conn = new PDO('mysql:host=localhost;dbname=cogip', 'root', '');
            return $conn;
            }
        catch(Exception $e) {
              die('erreur :' . $e->getMessage());    
        }
}
