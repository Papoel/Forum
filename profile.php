<?php
require 'controller/users/securityController.php';
require 'controller/users/showUserProfileController.php';
?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>

<body>
   <?php include 'includes/navbar.php'; ?>

   <div class="container">
      <?php if (isset($errorMsg)) {
         echo '<div class="alert alert-danger fw-bold mt-5">
               <i class="bi bi-exclamation-triangle me-2 h2"></i>'
            . $errorMsg .
            '</div>';
         die();
      } ?>
   </div>

   <main class="container-fluid bg-dark text-white">
      <div class="d-flex justify-content-around flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
         <?php if (isset($getQuestionUser)) { ?>
            <h1 class="h2">Tableau de bord - <?= $user_pseudo; ?></h1>
            <p class="text-warning"><?= $user_firstname . ' ' . $user_lastname; ?></p>
         <?php } ?>
      </div>
   </main>

   <?php if (isset($getQuestionUser)) { ?>
      <div class="container">
         <div class="card">
            <div class="card-body">
               <h4> <?= $user_pseudo; ?> </h4>
               <hr>
               <p><?= $user_firstname . ' ' . $user_lastname; ?></p>
            </div>
         </div>
         <br>
         <?php while ($question = $getQuestionUser->fetch()) { ?>
            <!-- <div class="container"> -->
            <div class="card">
               <div class="card-header">
                  <div class="me-auto d-flex justify-content-between">
                     <?= $question['title']; ?>
                     <a class="mx-3 btn btn-sm btn-outline-primary px-3" href="question.php?id=<?= $question['id']; ?>">Lire</a>
                  </div>
               </div>

               <div class="card-body">
                  <?= $question['description']; ?>
               </div>
               <div class="card-footer">
                  Par
                  <?= $question['pseudo_author']; ?>
                  le
                  <?= $question['date_publication']; ?>
               </div>
            </div>
            <br>
            <hr><br>
            <!-- </div> -->
         <?php } ?>
      </div>
   <?php } ?>

</body>

</html>