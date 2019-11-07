<?php 
// require la page Manager.php qui stocke la request SQL et connecte avec la BDD
require_once('model/Manager.php');

//Création des fonctions qui font des request sur la BDD

function getInvoice()
{
  $conn = dbConnect();
   //cette ligne empêche les doublons d'éléments dans l'affichage
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
  $data_invoice = $conn->query(
    'SELECT id_invoice, number, date, name, country, type
     FROM invoice 
     JOIN company ON fk_company = id_company
     JOIN type_company
     WHERE id_invoice');
  return $data_invoice;
}

$invoice = getInvoice();

$id = ''; 
if( isset( $_GET['id'])) {
    $id = $_GET['id']; 
} 

// Une fonction qui crée un Loop et met en forme les données qu'on lui demande
function createTable($fetchFrom){
  while ($data = $fetchFrom->fetch()) {
    echo "<tr>";
    foreach($data as $key => $value)
      {
      echo "<td> $value </td>";
      
      }
<<<<<<< HEAD
    echo "<td><a href=?invoiceDetail&id=".$data['id_invoice'].">more info</a></td>" ;
     // echo "<td><a href=?invoiceDetail&id=".$id.">Plus d'info</a></td>";

    //var_dump ($data);
       echo "</tr>";
=======
    echo "<td><a href=#>Détails</a></td>" ;
    echo "</tr>";
>>>>>>> adacba2c2b64d8f14b16f6db2f42ef0e3a0927d1
  }
}
