<?php
session_start();
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
   </div>

</body>

</html>