<h1> Clients </h1>
<table class='table'>
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>TVA</th>
        <th>Pays</th>
    </thead>
    <?php createTable($companyClient); ?>

</table>
<h1> Fournisseurs </h1>
<table class='table'>
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>TVA</th>
        <th>Pays</th>
    </thead>

    <?php createTable($companyFournisseur); ?>
</table>