<?php 
require('model/connect.php');
require('controller/controller.php');

echo "<h1> Clients </h1>";
echo "<table class='table'>";
createTable($companyClient);
echo "</table>";

echo "<h1> Fournisseurs </h1>";
echo "<table class='table'>";
createTable($companyFournisseur);
echo "</table>";