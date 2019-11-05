<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="vue/assets/css/style.css">
    <title>Document</title>
</head>

<body>
<<<<<<< HEAD
  <nav class="navbar navbar-expand-sm bg-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="?home">Acceuil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?invoice">Factures</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?company">Sociétés</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?login">Connexion</a>
      </li>
    </ul>

  </nav>

  <main>
    <?php
    
   
    if(isset($_GET['invoice'])){
    require('controller/invoiceController.php');
    }
    
      if(isset($_GET['home'])){
    echo 'ceci est le home';
    }
    
         if(isset($_GET['company'])){
    echo 'ceci est la page company';
    }
     
    ?>



  </main>


  <footer>

  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
=======
    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="?home">Acceuil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?invoice">Factures</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?company">Sociétés</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Connexion</a>
            </li>
        </ul>

    </nav>

    <main>
        <?php
      if(isset($_GET['home'])){
          echo 'ceci est la page d\'accueil';
      }
      if(isset($_GET['company'])){
        require('controller/companyController.php');
      }

        ?>

    </main>


    <footer>

    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
>>>>>>> greg
</body>

</html>