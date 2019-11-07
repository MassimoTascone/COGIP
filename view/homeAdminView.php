<div class="container">
    <h1>Bonjour ! "add name of user"</h1>
    <div class="row">
        <div class="text-center">
            <button class="btn btn-info  my-4">Ajouter Contact</button>
            <button class="btn btn-info  my-4">Ajouter Facture</button>
            <button class="btn btn-info  my-4">Ajouter Société</button>
        </div>

        <div class="col-10">

            <h2>5 dernières Factures</h2>
            <table class="table border">
                <th>Id</th>
                <th>Numéro</th>
                <th>Date</th>
                <th>Société</th>
                <?php createTable($invoiceAdmin); ?>
            </table>

            <h2>5 dernières Contacts</h2>
            <table class="table border">
                <th>Id</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Société</th>
                <?php createTable($contactAdmin); ?>
            </table>

            <h2>5 dernières Sociétés</h2>
            <table class="table border">
                <th>Id</th>
                <th>Société</th>
                <th>TVA</th>
                <th>Pays</th>
                <th>Type</th>
                <?php createTable($companyAdmin); ?>
            </table>

        </div>
    </div>
</div>