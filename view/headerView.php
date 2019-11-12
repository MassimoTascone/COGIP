<?php 
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
function navbar() {
  if ($_SESSION ==  NULL) {
    echo'
    <nav class="navbar navbar-expand-sm">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="?home">Accueil</a>
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
    ';
  }
  else {
    echo '
    <nav class="navbar navbar-expand-sm">
      <ul class="navbar-nav mx-auto">
          <li class="nav-item">
              <a class="nav-link" href="?home">Accueil Admin</a>
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
              <a class="nav-link" href="?admin">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?deco">Deconnexion</a>
          </li>
      </ul>
</nav>
';
  }
}
  
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lexend+Exa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/assets/css/style.css">
    <title><?php echo "$title" ?></title>
</head>

<body>
    <?php navbar(); ?>
    <main>