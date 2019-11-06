<h1> Société : <?php createTable($companyName); ?> </h1>
<p> N° TVA : <?php createTable($companyTVA); ?> </p>
<p> Type : </p>
<h2> Personnes de contact </h2>
<table class='table'>
    <thead>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Email</th>
    </thead>
    <?php createTable($companyContacts); ?>
</table>
<h2> Factures </h2>
<table class='table'>
    <thead>
        <th>N° facture</th>
        <th>Date</th>
        <th>Prénom contact</th>
        <th>Nom contact</th>
    </thead>
    <?php createTable($companyInvoices); ?>
</table>