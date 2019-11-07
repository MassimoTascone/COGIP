<table class='table'>


    <thead>
        <th>Société</th>
        <th>N° TVA</th>
        <th>Type</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Email</th>
    </thead>
    <?php createTable($companyPeopleDetails); ?>
</table>
<p> Factures </p>
<table class='table'>
    <thead>
        <th>N° facture</th>
        <th>Date</th>
        <th>Prénom contact</th>
        <th>Nom contact</th>
    </thead>

    <?php createTable($companyInvoiceDetails); ?>

</table>