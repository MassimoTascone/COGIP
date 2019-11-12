<h1> Clients </h1>
<table class='table col-12 col-md-8 offset-md-2 border'>
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>TVA</th>
        <th>Pays</th>
    </thead>
    <?php createTable($companyClient); ?>

</table>
<h1> Fournisseurs </h1>
<table class='table col-12 col-md-8 offset-md-2 border'>
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>TVA</th>
        <th>Pays</th>
    </thead>

    <?php createTable($companyFournisseur); ?>
</table>