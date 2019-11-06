<?php
require_once('model/Manager.php');
// Taking into variables user's input

if (isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = dbConnect();
    $row;
    $logError = "";
    // making inputs required
    if(empty($username || empty($password))){
        $logError = "Veuillez remplir les champs svp";
    }
    else {
        $query = $conn->prepare("SELECT username, password FROM user WHERE username='$username'");
        $query->execute(array($username,$password));
        $row = $query->fetch(PDO::FETCH_BOTH);
    }
    // var_dump($row);
    if ($row == false) {
        $logError = "Mauvais nom d'utilisateur/mot de passe";
    }
    else {
        if ($_POST['password'] == $row['password']){
            $_SESSION['id']=$row['id'];
            $_SESSION['username']=$row['username'];
            $_SESSION['password']=$row['password'];
            // header('location:controller/companyController.php');
            echo "Vous êtes connecté";         
        }
        
		
    }

}