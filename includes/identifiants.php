<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=cogip', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>