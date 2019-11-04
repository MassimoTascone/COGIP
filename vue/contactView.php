<?php
require('model/connect.php');
require('controller/controller.php');

echo"<h1>Contact List</h1>";

echo "<table class='table'>";
createTable($people);
echo "<table>";