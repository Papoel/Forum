<?php
require 'controller/users/securityController.php';
require 'controller/questions/publishQuestionController.php';
?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>

<body>
   <?php include 'includes/navbar.php'; ?>

   <br><br>
   <form class="container" method="POST">

      <?php
      if (isset($errorMsg)) {
         echo '<div class="alert alert-danger fw-bold">
               <i class="bi bi-exclamation-triangle me-2 h2"></i>'
            . $errorMsg . '</div>';
      } elseif (isset($successMsg)) {
         echo '<div class="alert alert-success fw-bold">
            <i class="bi bi-check2-square me-2 h2"></i>'
            . $successMsg . '</div>';
      }
      ?>

      <div class="mb-3">
         <label for="title" class="form-label">Titre de la question</label>
         <input type="text" class="form-control" name="title">
      </div>
      <div class="mb-3">
         <label for="description" class="form-label">Description de la question</label>
         <textarea class="form-control" name="description"></textarea>
      </div>
      <div class="mb-3">
         <label for="content" class="form-label">Contenu de la question</label>
         <textarea type="text" class="form-control" name="content"></textarea>
      </div>

      <button type="submit" class="w-100 btn btn-success p-2" name="validate">Publier la question</button>

   </form>


</body>

</html>