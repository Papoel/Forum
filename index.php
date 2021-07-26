<?php
// session_start();
require 'controller/users/securityController.php';

var_dump($_SESSION['id'], $_SESSION['pseudo']);

/*
   $_SESSION['auth']      = true;
   $_SESSION['id']        = $users_infos['id'];
   $_SESSION['lastname']  = $users_infos['lastname'];
   $_SESSION['firstname'] = $users_infos['firstname'];
   $_SESSION['pseudo']    = $users_infos['pseudo'];
*/
?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>

<body>
   <?php include 'includes/navbar.php'; ?>
   <br><br>

<div class="container">
   <h1>Bienvenue sur le Forum</h1>
</div>

</body>

</html>