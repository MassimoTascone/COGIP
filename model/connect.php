<?php
// Connection to DB




<<<<<<< HEAD
$conn = new PDO('mysql:host=localhost;dbname=COGIP', 'root', '');
=======
$conn = new PDO('mysql:host=database;dbname=COGIP', 'root', 'root');
>>>>>>> 0cf6affb3cba6960a9ceb79db3f719b9441e2228

try {
    $conn;
}
catch(Execption $e) {
    die('erreur :' . $e->getMessage());    
}
?>
