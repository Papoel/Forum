<?php require 'controller/users/loginController.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>

<body>

   <br><br>
   <form class="container" method="post">

      <?php if (isset($errorMsg)) {
         echo '<div class="alert alert-danger fw-bold">
               <i class="bi bi-exclamation-triangle me-2 h2"></i>'
            . $errorMsg .
            '</div>';
      } ?>

      <div class="mb-3">
         <label for="pseudo" class="form-label">Pseudo :</label>
         <input type="text" class="form-control" name="pseudo">
      </div>

      <div class="mb-3">
         <label for="password" class="form-label">Mot de passe :</label>
         <input type="password" class="form-control" name="password">
      </div>

      <button type="submit" class="w-100 btn btn-primary p-2" name="validate">Se connecter</button>
      <br><br>
      <a href="signup.php">
         <p>Je n'ai pas de compte, creer un compte</p>
      </a>

   </form>

</body>

</html>