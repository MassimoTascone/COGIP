<table class='table'>

    <h1>Société : <?php echo $name['name'];?></h1>
    <p>N° de TVA : <?php echo $name['TVA'];?></p>
    <p>Type : <?php echo $name['type'];?></p>
    <p>Personne de contact<p>
            <thead>
                <tr>
                    <th> Prénom </th>
                    <th> Nom </th>
                    <th> Email </th>
                </tr>
                <tr>
                    <td><?php echo $name['first_name'];?></td>
                    <td><?php echo $name['last_name'];?></td>
                    <td><?php echo $name['email'];?></td>
                </tr>
            </thead>
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