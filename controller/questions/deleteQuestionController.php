<?php
session_start();
if (!$_SESSION['auth']) {
   header('Location: ../../login.php');
}

require('../database.php');
include '../../includes/head.php';

//Vérifier si l'id est rentré en paramètre dans l'URL
if (isset($_GET['id']) and !empty($_GET['id'])) {

   $idQuestion = $_GET['id'];

   $checkIfquestionExist = $db->prepare('SELECT id_author FROM questions WHERE id = ?');
   $checkIfquestionExist->execute(array($idQuestion));

   if ($checkIfquestionExist->rowCount() > 0) {

      $usersInfo = $checkIfquestionExist->fetch();
      if ($usersInfo['id_author'] == $_SESSION['id']) {

         $deleteThisQuestion = $db->prepare('DELETE FROM questions WHERE id = ?');
         $deleteThisQuestion->execute(array($idQuestion));

         header('Location: ../../my-questions.php');
         
      } else {
         $errorMsg = "Vous n'avez pas le droit de supprimer une question qui ne vous appartient pas !";
         echo '<div class="container mt-5">
         <div class="alert alert-danger fw-bold p-5 display-6">
            <i class="bi bi-exclamation-triangle me-2 display-6"></i>'
            . $errorMsg .
            '</div>
      </div>';
      }
   } else {
      $errorMsg = "Aucune question n'a été trouvée...";
      echo '<div class="container mt-5">
         <div class="alert alert-danger fw-bold p-5 display-6">
            <i class="bi bi-exclamation-triangle me-2 display-6"></i>'
         . $errorMsg .
         '</div>
      </div>';
   }
} else {
   $errorMsg = "Aucune question n'a été trouvée...";
   echo '
   <div class="container mt-5">

   <div class="alert alert-danger fw-bold p-5 display-6">
   <i class="bi bi-exclamation-triangle me-2 display-6"></i>'
      . $errorMsg .
      '</div>
   </div>';
}
