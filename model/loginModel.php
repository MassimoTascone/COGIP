<?php
require('model/Manager.php');
// Taking into variables user's input
if (isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $logError = "";
    // making inputs required
    if(empty($username || empty($password))){
        $logError = "Veuillez remplir les champs svp";
    }
    else {
        $query = $conn->prepare("SELECT username, password FROM users WHERE username='$username'");
        $query->execute(array($username,$password));
        $row = $query->fetch(PDO::FETCH_BOTH);
    }

    if ($row->rowCount() == 0) {
        $logError = "Mauvais nom d'utilisateur/mot de passe";
    }
    else {
        if ($_POST['password'] AND $row['password']){
            $_SESSION['id']=$row['id'];
            $_SESSION['username']=$row['username'];
            $_SESSION['password']=$row['password'];
        }
        
		
    }

}
