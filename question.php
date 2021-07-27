<?php
require 'controller/users/securityController.php';
require 'controller/questions/showQuestionContentController.php';
require 'controller/questions/postAnswerController.php';
require 'controller/questions/showAnswerController.php'

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
         <section id="show-content">
            <h3> <?= $question_title; ?> </h3>
            <hr>
            <p class="d-inline text-muted">Description : </p>
            <p class="d-inline"> <?= $question_description; ?> </p>
            <hr>
            <p class="d-inline text-muted">Contenu : </p>
            <p class="d-inline"> <?= $question_content; ?> </p>
            <hr>
            <p class="d-inline">
               Publié par
               <a href="profile.php?id=<?= $question_id_author; ?>"><?= $question_pseudo_author; ?></a>
               le
               <?= $question_publication_date; ?>
            </p>
         </section>
         <br><br>
         <hr>
         <section id="show-answers" class="mt-5">

            <form class="form-group" method="post">
               <div class="mx-5">
                  <label class="form-label fw-bold h4 p-2">Réponse :</label>
                  <textarea name="answer" class="form-control"></textarea>
                  <br>
                  <button class="btn btn-primary w-75 d-block mx-auto p-2 fs-5" type="submit" name="validate">
                     Répondre
                  </button>
               </div>
               <br>
               <hr><br>
               <?php

               while ($answer = $getAllAnswersofQuestion->fetch()) {
               ?>
                  <div class="card mx-5">
                     <div class="card-header">
                        <?= $answer['pseudo_author'] ?>
                     </div>
                     <div class="card-body">
                        <?= $answer['content'] ?>
                     </div>
                  </div>
                  <br>
               <?php
               }
               ?>
            </form>
         </section>
      <?php
      }

      ?>


   </div>
</body>

</html>