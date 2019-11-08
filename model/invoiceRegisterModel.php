<?php

require_once('model/Manager.php');

//function invoiceRegister(){

// if(isset($_POST['number']) && isset($_POST['date']) && isset($_POST['fk_company']) && isset($_POST['fk_people']))
// {
// $conn = dbConnect();
// $number = $_POST['number'];
// $date = $_POST['date'];
// $fk_company = $_POST['fk_company'];
// $fk_people = $_POST['fk_people'];

$bdd->exec('INSERT INTO invoice(number,date,fk_company,fk_people) VALUES(:number, :date ,:fk_company, :fk_people)');

// }

//}