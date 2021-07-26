<?php
require 'controller/questions/getInfosOfEditedQuestionController.php';
require 'controller/questions/editQuestionController.php';
require 'controller/users/securityController.php';
?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php' ?>

<body>
   <?php include 'includes/navbar.php' ?>

   <br><br>

   <div class="container">
      <?php if (isset($errorMsg)) {
         echo '<div class="alert alert-danger fw-bold">
               <i class="bi bi-exclamation-triangle me-2 h2"></i>'
            . $errorMsg .
            '</div>';
      } ?>

      <?php if (isset($question_content)) { ?>
         <form method="POST">
            <div class="mb-3">
               <label for="title" class="form-label">Titre de la question</label>
               <input type="text" class="form-control" name="title" value="<?= $question_title ?>">
            </div>
            <div class="mb-3">
               <label for="description" class="form-label">Description de la question</label>
               <textarea class="form-control" name="description" rows="5" cols="20"><?= $question_description ?></textarea>
            </div>
            <div class="mb-3">
               <label for="content" class="form-label">Contenu de la question</label>
               <textarea type="text" class="form-control" name="content" rows="20" cols="20"><?= $question_content ?></textarea>
            </div>

            <button type="submit" class="w-100 btn btn-warning p-2" name="validate">Modifier la question</button>

         </form>
      <?php
      }
      ?>


   </div>