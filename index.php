<?php
require('controller/users/securityController.php');
require('controller/questions/showAllQuestionController.php');
?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>

<body>
   <?php include 'includes/navbar.php'; ?>
   <br><br>

   <div class="container">
      <form method="GET">
         <div class="form-group row">
            <div class="col-8">
               <input placeholder="Rechercher une question" type="search" name="search" class="form-control">
            </div>
            <div class="col-4">
               <button type="submit" class="btn btn-success">Rechercher</button>
            </div>
         </div>
      </form>


      <br>

      <?php while ($question = $getAllQuestions->fetch()) { ?>
         <div class="card">

            <div class="card-header">
               <div class="me-auto d-flex justify-content-between">
                  <?= $question['title']; ?>
                  <a class="mx-3 btn btn-sm btn-outline-primary px-3" 
                     href="question.php?id=<?= $question['id']; ?>">
                        Lire
                  </a>
               </div>
            </div>

            <div class="card-body">
               <?= $question['description']; ?>
            </div>

            <div class="card-footer">
               Publié par 
               <a href="profile.php?id=<?=$question['id_author'];?>"><?=$question['pseudo_author'];?></a> 
               le 
               <?= $question['date_publication']; ?>
            </div>

         </div>

         <br>
      <?php } ?>

   </div>


</body>

</html>