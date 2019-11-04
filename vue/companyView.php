<?php 
require('model/connect.php');
require('controller/controller.php');

echo "<table class='table'>";
createTable($companyClient);
echo "</table>";

echo "<table class='table'>";
createTable($companyFournisseur);
echo "</table>";