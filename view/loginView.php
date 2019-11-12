<div class="container">
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <!-- Default form login -->
            <form class="text-center p-5 m-5" action="" method="post">
                <h1>Bienvenue à la COGIP</h1>
                <p class="h2 mb-4">Connectez-vous</p>
                <!-- Username -->
                <input type="text" name="username" id="username" class="form-control mb-4" placeholder="Votre Identifiant"
                    >
                <!-- Password -->
                <input type="password" name="password" id="password" class="form-control mb-4" placeholder="Mot de passe">
                <div class="d-flex justify-content-around">
                    <span class="error"><?php echo $logError ?></span>
                </div>
                <!-- Sign in button -->
                <div class="text-center">
                    <button class="btn btn  my-4" name="login" type="submit">Connexion</button>
                </div>
            </form>
        </div>
    </div>
</div>