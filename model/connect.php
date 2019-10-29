<?php
// Connection to DB




$conn = new PDO('mysql:host=database;dbname=COGIP', 'root', 'root');

try {
    $conn;
}
catch(Execption $e) {
    die('erreur :' . $e->getMessage());    
}
?>
