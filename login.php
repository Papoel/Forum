<?php require 'controller/users/loginController.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="includes/signin.css">
<?php include 'includes/head.php'; ?>

<body>

      <?php if (isset($errorMsg)) {
         echo '<div class="mx-auto alert alert-danger fw-bold p-5 h2">
               <i class="bi bi-exclamation-triangle me-2 h2"></i>'
            . $errorMsg .
         '<br>
            <div class="mt-3 h4">
               <a href="login.php" class="d-flex justify-content-center text-center">Recommencer</a>
            </div>';
            '</div>';
            die();
      } ?>
   <main class="form-signin">

      <form method="POST">
         <img class="d-block mx-auto mb-4" src="assets/logo.jpg" alt="" width="72" height="72">
         <h1 class="text-center h3 mb-3 fw-normal">Connectez-vous</h1>

         <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="votre pseudo" name="pseudo">
            <label for="floatingInput">Pseudo</label>
         </div>

         <br>

         <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Mot de passe</label>
         </div>

         <button class="w-100 btn btn-lg btn-primary" type="submit" name="validate">Se connecter</button>

         <div class="form-account-exist mt-2">
            <a href="signup.php">
               <p>Je n'ai pas de compte, creer un compte</p>
            </a>
         </div>

         <div class="form-footer-mentions">
            <p class="mt-5 mb-3 text-muted">
               &copy; BriDevProject pour Technisonic
               - Tous droits réservés.
               <?= date('Y'); ?>
            </p>
         </div>
      </form>
   </main>
</body>

</html>