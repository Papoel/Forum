<?php require 'controller/users/signupController.php'; ?>

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
               <a href="signup.php" class="d-flex justify-content-center text-center">Recommencer</a>
            </div>';
      '</div>';
      die();
   } ?>

   <main class="form-signin">

      <form method="POST">
         <img class="d-block mx-auto mb-4" src="assets/bridevproject-logo.png" alt="" width="72" height="72">
         <h1 class="text-center text-title-color h3 mb-3 fw-bold">Inscrivez-vous</h1>

         <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="votre pseudo" name="pseudo">
            <label for="floatingInput">Pseudo</label>
         </div>

         <br>

         <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="votre pseudo" name="firstname">
            <label for="floatingInput">Prénom :</label>
         </div>

         <br>

         <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="votre pseudo" name="lastname">
            <label for="floatingInput">Nom :</label>
         </div>

         <br>

         <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Mot de passe</label>
         </div>

         <button class="w-100 btn btn-lg btn-success" type="submit" name="validate">S'inscrire</button>

         <div class="form-account-exist">
            <span>J'ai déjà un compte,</span>
            <a class="account" href="login.php">
               <b>me connecter.</b>
            </a>
         </div>

         <div class="form-footer-mentions">
            <p class="text-muted">
               &copy; BriDevProject pour Technisonic
               - Tous droits réservés.
               <?= date('Y'); ?>
            </p>
         </div>
      </form>
   </main>
</body>

</html>