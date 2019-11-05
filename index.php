<?php require('view/header.php');

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
      require('controller/companyElementController.php');
    }

require('view/footer.php');