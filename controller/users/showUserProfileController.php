<?php 
require('controller/database.php');

// Récupérer l'identifiant de l'utilisateur
if(isset($_GET['id']) && !empty($_GET['id'])) {

// Identifiant de l'utilisateur
   $idUser = $_GET['id'];

// Vérifier si l'utilisateur existe
   $checkIfUserExist = $db->prepare('SELECT pseudo, firstname, lastname FROM users WHERE id = ? ORDER BY id DESC');
   $checkIfUserExist->execute(array($idUser));

   if($checkIfUserExist->rowCount() > 0) {

   // Récupérer toutes les donéées de l'utilisateurs
      $user_infos = $checkIfUserExist->fetch();

      $user_pseudo = $user_infos['pseudo'];
      $user_firstname = $user_infos['firstname'];
      $user_lastname = $user_infos['lastname'];

   // Récupérer toutes les questions de l'utilisateurs
      $getQuestionUser = $db->prepare('SELECT * FROM questions WHERE id_author = ?');
      $getQuestionUser ->execute(array($idUser));

   } else {
      $errorMsg = "Aucun utilisateur trouvé !";
   }


} else {
   $errorMsg = "Aucun utilisateur trouvé ! ...";
}