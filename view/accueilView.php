<div class="container">

    <h1 class="mainTitle">COGIP</h1>

    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">

            <h2>5 dernières Factures</h2>
            <table class="table border">
                <th>Id</th>
                <th>Numéro</th>
                <th>Date</th>
                <th>Société</th>
                <?php createTable($invoiceAccueil); ?>
            </table>

            <h2>5 derniers Contacts</h2>
            <table class="table border">
                <th>Id</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Société</th>
                <?php createTable($contactAccueil); ?>
            </table>

            <h2>5 dernières Sociétés</h2>
            <table class="table border">
                <th>Id</th>
                <th>Société</th>
                <th>TVA</th>
                <th>Pays</th>
                <th>Type</th>
                <?php createTable($companyAccueil); ?>
            </table>

        </div>
    </div>
</div>