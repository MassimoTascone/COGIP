<table class='table'>

    <h1>Société : <?php echo $peopleDetail['name'];?></h1>
    <p>N° de TVA : <?php echo $peopleDetail['TVA'];?></p>
    <p>Type : <?php echo $peopleDetail['type'];?></p>
    <p>Personne de contact<p>
            <thead>
                <tr>
                    <th> Prénom </th>
                    <th> Nom </th>
                    <th> Email </th>
                </tr>
                <tr>
                    <td><?php echo $peopleDetail['first_name'];?></td>
                    <td><?php echo $peopleDetail['last_name'];?></td>
                    <td><?php echo $peopleDetail['email'];?></td>
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

    <?php createTable($companyInvoiceDetail); ?>

</table>