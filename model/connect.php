<?php
// Connection to DB




$conn = new PDO('mysql:host=localhost;dbname=COGIP', 'root', '');

try {
    $conn;
}
catch(Execption $e) {
    die('erreur :' . $e->getMessage());    
}
?>