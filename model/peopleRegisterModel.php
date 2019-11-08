<?php

var_dump($_POST);

// Connexion to Manager.php
require_once('model/Manager.php');

//function contact register 
function contactRegister(){
// Condition : if fields are completed
if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['fk_comp'])){
        // Var declaration  
        $conn = dbConnect(); 
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];  
        $email = $_POST['email'];  
        $fk_comp = $_POST['fk_comp'];
        // check if the email addres is well formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email format."; }
          //send request
          $data_company_register = $req=$conn->prepare('INSERT INTO people(first_name, last_name, email, fk_comp) VALUES(:first_name, :last_name, :email,:fk_comp)');
          $req->execute(array(
          'first_name' => $firstname,
          'last_name' => $lastname,
          'email' => $email,
          'fk_comp' => $fk_comp
        ));
        return $data_company_register;
        echo '<h1>les nouvelles donées ont été correctement enregistrées !</h1>';
    }
}

function getCompanyFromPeople()
{
 $conn = dbConnect();
 $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
 $data_select_company = $conn->query(
         'SELECT name
         FROM company'
         );
        return $data_select_company;
}

$displaylistCompany = getCompanyFromPeople();
var_dump($displaylistCompany);

$companySelectNames = getData($displaylistCompany);

function selectCompany($fetchFrom){
        while($data = $fetchFrom->fetch()){
                echo "<tr>";
                foreach($data as $value)
                {
                        echo "<td> $companySelectNames </td>";
                        // echo '<option> '.$companySelectNames["id_company"]. '</option>';
                }
                echo "</tr>";
        }
}

function getData($fetchFrom){
        return $fetchFrom->fetch();
}

var_dump($companySelectNames['name']);



// var_dump($key);