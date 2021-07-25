<?php
// Se connecter à la base de donnée
require('models/database.php');

// Validation du formulaire
if (isset($_POST['validate'])) {

// Vérifer si l'itilisateur a completer tous les chmaps
   if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {

   // Donnée de l'utilisateur
      $user_pseudo    = htmlspecialchars($_POST['pseudo']);
      $user_password  = htmlspecialchars($_POST['password']);

   // Vérifier si l'utilisateur existe (si le pseudo existe)
      $checkIfUserExist = $db->prepare('SELECT * FROM users WHERE pseudo = ?');
      $checkIfUserExist -> execute(array($user_pseudo));

      if ($checkIfUserExist -> rowCount() > 0) {

      // Récupérer les données de l'utilisateur
         $user_infos = $checkIfUserExist->fetch();

      // Vérifier si le mot de passe est correct
         if (password_verify($user_password, $user_infos['password'])) {

      // Authentifier l'utiliateur sur le site
            $_SESSION['auth']      = true;
            $_SESSION['id']        = $usersInfo['id'];
            $_SESSION['lastname']  = $usersInfo['lastname'];
            $_SESSION['firstname'] = $usersInfo['firstname'];
            $_SESSION['pseudo']    = $usersInfo['pseudo'];

      // Rediriger l'utilisateur vers la page d'accueil
         header('Location: index.php');
         
   } else {
            $errorMsg = 'Votre mot de passe est incorrect ...';
         }

      } else {
         $errorMsg = 'Votre pseudo est incorrect ...';
      }
      
   } else {
      $errorMsg = 'Veuillez compléter tous les champs ...';
   }
}
