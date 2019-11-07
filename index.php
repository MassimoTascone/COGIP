<?php 
require('controller/headerController.php');

if(isset($_GET['peopleRegister'])){
  require('controller/peopleRegisterController.php');
}


    if(isset($_GET['home'])){
      require('controller/accueilController.php');
    }
  
    if(isset($_GET['invoice'])){
    require('controller/invoiceController.php');
    }    

    if(isset($_GET['contact'])){
      require('controller/peopleController.php');
      // require('controller/peopleElementController.php'); // juste pour test si la page fonctionne
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

require('controller/footerController.php');