<!DOCTYPE html>
    <html lang="en">
        <?php

include 'php_function\head_gen.php'; 
head_gen("CONNEXION");
        ?>
        <body>
        
        <div class="login-form">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <section class="signin-page account">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="block text-center">
                            <a href="index.php" stroke="none" style ="font-family: AustinBold, Austin; font-weight:bold;font-size:40px">SUNO</a>
                            <h2 class="text-center">BIENVENUE</h2>
                            <form class="text-left clearfix" action="connexion.php" method="post" >
                                <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                                </div>
                                <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                                </div>
                                <div class="text-center">
                                <button type="submit" class="btn btn-main text-center" >Se connecter</button>
                                </div>
                            </form>
                            <p class="mt-20">Nouveau sur le site ?<a href="inscription.php"> Créer un compte</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>