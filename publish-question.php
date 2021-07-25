<?php
require 'controller/users/securityController.php';
require 'controller/questions/publishQuestionController.php';
include 'includes/head.php';
?>
<body>
   <?php include 'includes/navbar.php';?>

   <br><br>
   <form class="container" method="post">

      <?php
      if (isset($errorMsg)) {
         echo '<div class="alert alert-danger"><b>' . $errorMsg . '</b></div>';
      }
      ?>

      <div class="mb-3">
         <label for="pseudo" class="form-label">Titre de la question :</label>
         <input type="text" class="form-control" name="title">
      </div>

      <div class="mb-3">
         <label for="pseudo" class="form-label">Catégorie :</label>
         <input type="text" class="form-control" name="category">
      </div>

      <div class="mb-3">
         <label for="pseudo" class="form-label">Description :</label>
         <textarea class="form-control" name="description" cols="10" rows="5"></textarea>
      </div>

      <div class=" mb-3">
         <label for="pseudo" class="form-label">Contenu :</label>
         <textarea class="form-control" name="content" cols="30" rows="10"></textarea>
      </div>

      <button type=" submit" class="w-100 btn btn-warning p-2" name="validate">Publier la question</button>

   </form>


</body>

</html>