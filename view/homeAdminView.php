<div class="container">
    <h1>Bonjour, <?php echo $_SESSION['username'];?></h1>
    <div class="row">
        <div class="text-center">
            <button class="btn btn-info  my-4">+  Contact</button>
            <button class="btn btn-info  my-4">+  Facture</button>
            <button class="btn btn-info  my-4">+  Société</button>
            <a href="?deco"><input class="btn btn-info  my-4" type="button" name="deco" value="Déconnexion"></a>
        </div>

        <div class="col-10">

            <h2>5 dernières factures</h2>
            <table class="table border">
                <th>Id</th>
                <th>Numéro</th>
                <th>Date</th>
                <th>Société</th>
                <?php createTable($invoiceAdmin); ?>
            </table>

            <h2>5 derniers contacts</h2>
            <table class="table border">
                <th>Id</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Société</th>
                <?php createTable($contactAdmin); ?>
            </table>

            <h2>5 dernières sociétés</h2>
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