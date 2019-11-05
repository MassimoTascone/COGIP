<?php
require('model/connect.php');
require('controller/peopleController.php');

echo"<h1>Contact List</h1>";

echo "<table class='table'>
<th>Id</th>
<th>Prénom</th>
<th>Nom</th>
<th>e-mail</th>
<th>Société</th>";
createTable($people);
echo "<table>";