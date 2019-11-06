<?php
require_once('model/Manager.php');

function getPeopleDetail() {
    $conn = dbConnect();
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $data_people_detail = $conn->query('SELECT first_name, last_name, email, number, date FROM people JOIN invoice ON fk_comp= id_invoice');
    return $data_people_detail;

}

$peopleDetail = getPeopleDetail();

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