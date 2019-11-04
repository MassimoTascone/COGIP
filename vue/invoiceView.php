<?php
require('model/invoiceModel.php');
require('controller/invoiceController.php');
// on affiche nos donées
echo "<table class='table'>
<th>Id</th>
<th>Number</th>
<th>Date</th>
<th>Company</th>
<th>Country</th>;
<th>Type</th>";
createTable($invoice);
echo "</table>";
