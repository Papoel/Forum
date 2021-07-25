<?php

// Se connecter à la base de donnée
require('models/database.php');

// Validation du formulaire
if (isset($_POST['validate'])) {
   // Vérifer si l'itilisateur a completer tous les chmaps
   if (
      !empty($_POST['pseudo']) &&
      !empty($_POST['firstname']) &&
      !empty($_POST['lastname']) &&
      !empty($_POST['password'])
   ) {

      // Donnée de l'utilisateur
      $user_pseudo    = htmlspecialchars($_POST['pseudo']);
      $user_lastname  = htmlspecialchars($_POST['lastname']);
      $user_firstname = htmlspecialchars($_POST['firstname']);
      $user_password  = password_hash($_POST['password'], PASSWORD_DEFAULT);

      // Vérifier si l'utilisateur existe dèjà sur le site
      $checkIfUserAlreadyExists = $db->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
      $checkIfUserAlreadyExists->execute(array($user_pseudo));

      if ($checkIfUserAlreadyExists->rowCount() == 0) {

         // Inserer l'utilisateur en base de donnée
         $insertUserOnWebsite = $db->prepare(
            'INSERT INTO users(pseudo, firstname, lastname, password) 
            VALUES(?, ?, ?, ?)');
            
         $insertUserOnWebsite->execute(array(
            $user_pseudo, 
            $user_firstname, 
            $user_lastname, 
            $user_password)
         );

         // Récupèrer les infos d'un utilisateur
         $getInfosOfUserReq = $db->prepare('SELECT id, pseudo, firstname, lastname FROM users WHERE firstname = ? AND lastname = ? AND pseudo = ?');
         $getInfosOfUserReq->execute(array(
            $user_firstname, 
            $user_lastname, 
            $user_pseudo)
         );

         $usersInfo = $getInfosOfUserReq->fetch();

         // Authentification de l'utilisateur sur le site et récupérer ses données dans des variables globales de session
         $_SESSION['auth']      = true;
         $_SESSION['id']        = $usersInfo['id'];
         $_SESSION['lastname']  = $usersInfo['lastname'];
         $_SESSION['firstname'] = $usersInfo['firstname'];
         $_SESSION['pseudo']    = $usersInfo['pseudo'];

         // Rediriger l'utilisateur vers une page d'accueil
         header('Location: index.php');
      } else {
         $errorMsg = "L'utilisateur existe dèja ...";
      }
      
   } else {
      $errorMsg = 'Veuillez compléter tous les champs ...';
   }
}
