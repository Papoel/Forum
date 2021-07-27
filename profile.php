<?php
require 'controller/users/securityController.php';
require 'controller/users/showUserProfileController.php';
?>
<!DOCTYPE html>
<html lang="en">
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
   </div><br><br>

   <?php
   if (isset($getQuestionUser)) {
   ?>
      <div class="container">
         <div class="card">
            <div class="card-body">
               <h4> @<?= $user_pseudo; ?> </h4>
               <hr>
               <p><?= $user_firstname . ' ' . $user_lastname; ?></p>
            </div>
         </div>
         <br>
         <?php
            while ($question = $getQuestionUser->fetch()) {
               ?>
                  <!-- <div class="container"> -->
                     <div class="card">
                        <div class="card-header">
                           <?= $question['title']; ?>
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
                     <br><hr><br>
                  <!-- </div> -->
               <?php
            }
         ?>
      </div>
   <?php
   }
   ?>

   <div class="container-fluid">
      <div class="row">
         <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
            <div class="position-sticky pt-3">
               <ul class="nav flex-column">
                  <li class="nav-item">
                     <a class="nav-link dash-link" aria-current="page" href="#">
                        Les questions posées
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <p class="dash-link"> Les réponses postées</p>
                     </a>
                  </li>
               </ul>
            </div>
         </nav>
         <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
               <h1 class="h2">Tableau de bord - <?= $user_pseudo; ?></h1>
               <!-- <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group me-2">
                     <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                     <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                  </div>
                  <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                     <span data-feather="calendar"></span>
                     This week
                  </button>
               </div> -->
            </div>
            <canvas class="my-4 w-100" id="myChart" width="900" height="435"></canvas>
            <h2>Section title</h2>
         </main>
      </div>
   </div>

</body>

</html>