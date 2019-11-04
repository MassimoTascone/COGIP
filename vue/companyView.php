<?php 
require('model/connect.php');
require('controller/controller.php');

echo "<h1> Clients </h1>";
echo "<table class='table'>";
echo "<thead>
<th>ID</th>
<th>Nom</th>
<th>TVA</th>
<th>Pays</th>
</thead>";
createTable($companyClient);
echo "</table>";

echo "<h1> Fournisseurs </h1>";
echo "<table class='table'>";
echo "<thead>
<th>ID</th>
<th>Nom</th>
<th>TVA</th>
<th>Pays</th>
</thead>";
createTable($companyFournisseur);
echo "</table>";