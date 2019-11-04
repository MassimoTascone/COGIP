<?php 
require('model/connect.php');
require('controller/controller.php');

echo "<table class='table'>";
createTable($company);
echo "</table>";