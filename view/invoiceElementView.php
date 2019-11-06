<h1>Facture numéro : <?php createTable($invoiceNumber); ?></h1>

<p>Société liée à la facture</p>
<table class="table">
<th>Nom de la société</th>
<th>TVA</th>
<th>Type</th>
<?php createTable($invoiceCompany);?>
</table>
