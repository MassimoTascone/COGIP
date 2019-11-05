<?php
require('model/connect.php');
// Fonctiion with Query to get data from People table
function getPeople() {
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_people = $conn->query('SELECT id_people, first_name, last_name, email, name FROM people JOIN company ON fk_comp = id_company');
  return $data_people;
}

$people = getPeople();

function createTable($fetchFrom){
  while ($data = $fetchFrom->fetch()) {
      
      echo '<tr>';
      echo '<a href="#">';
      foreach($data as $key => $value){
        echo "<td> $value </td>";
      }
      echo "<td><a href='#'>More Info</a></td>";

      echo '</a>';
      echo '<tr>';
      }
  }

