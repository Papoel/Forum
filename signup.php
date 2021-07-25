<?php require 'controller/users/signupController.php' ?>


<?php include 'includes/head.php' ?>

<body>

<br><br>
      <form class="container" method="post">

      <?php 
         if(isset($errorMsg)) {
            echo '<div class="alert alert-danger"><b>'
               .$errorMsg;
            echo '</b></div>'; 
         }
      ?>

         <div class="mb-3">
            <label for="pseudo" class="form-label">Pseudo :</label>
            <input type="text" class="form-control" name="pseudo">
         </div>

         <div class="mb-3">
            <label for="pseudo" class="form-label">Nom :</label>
            <input type="text" class="form-control" name="lastname">
         </div>

         <div class="mb-3">
            <label for="pseudo" class="form-label">Prenom :</label>
            <input type="text" class="form-control" name="firstname">
         </div>

         <div class="mb-3">
            <label for="password" class="form-label">Mot de passe :</label>
            <input type="password" class="form-control" name="password">
         </div>

         <button type="submit" class="w-100 btn btn-success p-2" name="validate">S'inscrire</button>
         <br><br>
         <a href="login.php"><p>J'ai dèjà un compte, je me connecte</p></a>
      </form>


</body>

</html>