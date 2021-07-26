<?php
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
         echo '<div class="alert alert-danger"><b>' . $errorMsg . '</b></div>';
      } ?>

      <?php if (isset($question_date)) { ?>
         <form method="POST">
            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
               <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Description de la question</label>
               <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Contenu de la question</label>
               <textarea type="text" class="form-control" name="content"></textarea>
            </div>

            <button type="submit" class="w-100 btn btn-warning p-2" name="validate">Modifier la question</button>

         </form>
      <?php
      }
      ?>


   </div>