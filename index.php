<?php require('controller/headerController.php');

session_start();
$title="";
  if(isset($_GET['home'])){
    $title="Accueil | COGIP";
    } 
  if(isset($_GET['invoice'])){
    $title="Factures | COGIP";
    }    

  if(isset($_GET['contact'])){
    $title="Contacts | COGIP";
    } 

  if(isset($_GET['company'])){
    $title="Sociétés | COGIP";
    }
    
  if(isset($_GET['login'])){
    $title="Connexion | COGIP";
    }


    if(isset($_GET['home'])){
      require('controller/accueilController.php');
    }
  
    if(isset($_GET['invoice'])){
    require('controller/invoiceController.php');
    }    

    if(isset($_GET['contact'])){
      require('controller/peopleController.php');
      } 

    if(isset($_GET['company'])){
      require('controller/companyController.php');
    }

 //   if(isset($_GET['login'])){
//      require('controller/loginController.php');
 //   }

    if(isset($_GET['login'])){
      require('controller/companyElementController.php');
    }

require('view/footerView.php');