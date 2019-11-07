<?php
require_once('model/Manager.php');
// Fonctiion with Query to get data from People table
function getPeople() {
  $conn = dbConnect();
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $data_people = $conn->query('SELECT id_people, first_name, last_name, email, name FROM people JOIN company ON fk_comp = id_company');
  return $data_people;
}

$people = getPeople();


if(isset($_GET['id'])){
  $id = $_GET['id'];
}
  
function createTable($fetchFrom){
  while ($data = $fetchFrom->fetch()) {
    echo "<tr>";
    foreach($data as $key => $value)
      {
      echo "<td> $value </td>";
      
      }
    echo '<td><a href="?contactDetail&id='.$data['id_people'].'">Détails</a></td>';
    echo "</tr>";
  }
}




    
  //     echo '<tr>';
  //    foreach($data as $key => $value){
  //       echo "<td> $value </td>";
        

  //     }
  //     echo '<td><a href="?contactDetail&Id='.$id.'>Plus d\'Info</a></td>'; 
    
  //     echo '</a>';
  //     echo '<tr>';
  //     }
  // }