<?php

// var_dump($_POST);

// if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email'])){

//   try {
//             $conn = new PDO('mysql:host=localhost;dbname=cogip', 'root', '');
//     $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//             return $conn;
//             }
//         catch(Exception $e) {
//               die('erreur :' . $e->getMessage());    
//         }
    
// $firstname = $_POST['first_name'];
// $lastname = $_POST['last_name'];
// $email = $_POST['email'];
  
//     echo 'données bien enregistrés';

//   $req=$conn->prepare('INSERT INTO people(first_name, last_name, email) VALUES(:first_name, :last_name, :email)');
//   $req-execute(array(
//   'first_name' => $firstname,
//   'last_name' => $lastname,
//   'email' => $email));
//   }

?>

<body>

  <p>Introduire nouveau contact</p>

  <div class="container">
    <div class="row">
      <div class="col-9">

        <form action="index.php" method="post">

          <div class="form-group">
            <label for="exampleInputEmail1">Firstname</label>
            <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Enter username" name="first_name">
            <small id="emailHelp" class="form-text text-muted">Prénom</small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Lastname</label>
            <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Enter username" name="last_name">
            <small id="emailHelp" class="form-text text-muted">Nom</small>
          </div>


          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
