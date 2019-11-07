<table class='table'>

    <h1>Société : <?php echo $peopleDetails['name'];?></h1>
    <p>N° de TVA : <?php echo $peopleDetails['TVA'];?></p>
    <p>Type : <?php echo $peopleDetails['type'];?></p>
    <p>Personne de contact<p>
            <thead>
                <tr>
                    <th> Prénom </th>
                    <th> Nom </th>
                    <th> Email </th>
                </tr>
                <tr>
                    <td><?php echo $peopleDetails['first_name'];?></td>
                    <td><?php echo $peopleDetails['last_name'];?></td>
                    <td><?php echo $peopleDetails['email'];?></td>
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