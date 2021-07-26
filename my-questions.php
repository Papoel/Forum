<?php
require('controller/users/securityController.php');
require('controller/questions/myQuestionsController.php');
?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php' ?>

<body>
   <?php include 'includes/navbar.php' ?>

   <br><br>

   <div class="container">
      <div class="row row-cols-lg-auto g-0">
         <?php while ($question = $getAllMyQuestions->fetch()) { ?>
            <div class="card me-4 mt-4" style="width:18rem;">
               <h5 class="card-header text-center fw-bold text-teal">
                  <?= $question['title']; ?>
               </h5>
               <div class="card-body">
                  <p class="card-text text-center">
                     <?= $question['description']; ?>
                  </p>
                  <div class="d-flex justify-content-around">
                     <a href="#" class="btn btn-primary">Lire</a>
                     <a href="edit-question.php?id=<?= $question['id'];?>" class="btn btn-warning">Modifier</a>
                  </div>
               </div>
               <div class="card-footer d-flex justify-content-between">
                  <small class="text-muted"> Par <?= $question['pseudo_author']; ?> </small>
                  <small class="text-muted"> le <?= $question['date_publication']; ?> </small>
               </div>
            </div>
            <br>
         <?php } ?>
      </div>
   </div>
</body>

</html>