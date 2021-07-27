<?php
session_start();
require 'controller/questions/showQuestionContentController.php';
?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>

<body>
   <?php include 'includes/navbar.php'; ?>

   <br><br>

   <div class="container">


      <?php if (isset($errorMsg)) {
         echo '<div class="alert alert-danger fw-bold">
               <i class="bi bi-exclamation-triangle me-2 h2"></i>'
            . $errorMsg .
            '</div>';
      }

      if (isset($question_publication_date)) {
      ?>
         <h3> <?= $question_title; ?> </h3>
         <hr>
         <p class="d-inline text-muted">Description : </p>
         <p class="d-inline"> <?= $question_description; ?> </p>
         <hr>
         <p class="d-inline text-muted">Contenu : </p>
         <p class="d-inline"> <?= $question_content; ?> </p>
         <hr>
         <small> <?= $question_pseudo_author . ' le ' . $question_publication_date; ?> </small>
      <?php
      }

      ?>


   </div>
</body>

</html>