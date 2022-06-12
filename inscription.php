<!DOCTYPE html>
    <html lang="en">
        <?php
            include 'php_function\head_gen.php';
            head_gen("INSCRIPTION");
        ?>
        <body>
        <div class="login-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
            
            <section class='signin-page account'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-6 col-md-offset-3'>
                            <div class='block text-center'>
                                <a href='index.php' stroke='none' style ='font-family: AustinBold, Austin; font-weight:bold;font-size:40px'>SUNO</a>
                                <h2 class='text-center'>Créer votre compte</h2>
                                <form class='text-left clearfix' action="inscription_traitement.php" method="post">
                                        <div class="form-group">
                                            <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                                        </div>
                                        <div class='text-center'>
                                            <button type='submit' class='btn btn-main text-center'>S'incrire</button>
                                        </div>
                                </form>
                                <p class='mt-20'>Déjà un compte ?<a href='indexform.php'> Se connecter</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
    </body>
</html>