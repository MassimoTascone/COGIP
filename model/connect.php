<?php
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