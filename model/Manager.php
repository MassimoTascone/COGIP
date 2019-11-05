<?php 

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