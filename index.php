<?php
session_start();
  if(isset($_GET['deco'])){
    session_destroy();
    unset($_SESSION);
    require('controller/accueilController.php');
  } 



    if(isset($_GET['home']) and ($_SESSION == NULL)){
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

    if(isset($_GET['login'])){
      require('controller/loginController.php');
    }

    if(isset($_GET['invoiceDetail'])){
      require('controller/invoiceElementController.php');
    }

    if(isset($_GET['contactDetail'])){
      require('controller/peopleElementController.php');
    }
    
    if($_SESSION['username']=='massimo'){
      require('controller/homeAdminController.php');

    }
    require('controller/accueilController.php');


    
  

    var_dump($_SESSION);

    



require('controller/footerController.php');
