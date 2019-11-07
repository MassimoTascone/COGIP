<div class="container">

    <h1>Bonjour !</h1>

    <div class="row">
        <div class="col-10">

            <p>5 dernières Factures</p>
            <table class="table">
                <th>Id</th>
                <th>Numéro</th>
                <th>Date</th>
                <th>Société</th>
                <?php createTable($invoiceAccueil); ?>
            </table>

            <p>5 dernières Contatcs</p>
            <table class="table">
                <th>Id</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Société</th>
                <?php createTable($contactAccueil); ?>
            </table>

            <p>5 dernières Sociétés</p>
            <table class="table">
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