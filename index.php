<?php 
require('controller/headerController.php');

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

    if(isset($_GET['login'])){
      // require('controller/loginController.php');
      require('controller/homeAdminController.php');

    }

    if(isset($_GET['contactDetail'])){
      require('controller/peopleElementController.php');
    }
    
    if(isset($_GET['contactDetail'])){
      require('controller/invoiceElementController.php');
    }

require('view/footerView.php');