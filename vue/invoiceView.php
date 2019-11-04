<?php

require('model/connect.php');
require('controller/controller.php');

// on affiche nos donées
echo "<table class='table'>";
createTable($invoice);
echo "</table>";
