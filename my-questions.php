<?php
require('controller/questions/myQuestionsController.php');
require('controller/users/securityController.php');
?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php' ?>

<body>
   <?php include 'includes/navbar.php' ?>

   <br><br>

   <div class="container">
      <?php while ($question = $getAllMyQuestions->fetch()) { ?>
         <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
               <div class="card" style="width:18rem;">
                  <h5 class="card-header text-center fw-bold">
                     <?= $question['title']; ?>
                  </h5>
                  <div class="card-body">
                     <p class="card-text text-center">
                        <?= $question['description']; ?>
                     </p>
                     <div class="d-flex justify-content-around">
                        <a href="#" class="btn btn-primary">Lire</a>
                        <a href="#" class="btn btn-warning">Modifier</a>
                     </div>
                  </div>
                  <div class="card-footer d-flex justify-content-between">
                     <small class="text-muted"> Par <?= $question['pseudo_author']; ?> </small>
                     <small class="text-muted"> le <?= $question['date_publication']; ?> </small>
                  </div>
               </div>
            </div>
         <?php } ?>
         </div>
   </div>
</body>

</html>