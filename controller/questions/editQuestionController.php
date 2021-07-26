<?php

require('models/database.php');

// Recupérer les données de la question grace à son id
if (isset($_GET['id']) && !empty($_GET['id'])) {

   $idQuestion = $_GET['id'];

   $checkIfquestionExist = $db->prepare('SELECT * FROM questions WHERE id = ?');
   $checkIfquestionExist->execute(array($idQuestion));

   if ($checkIfquestionExist->rowCount() > 0) {

      $questionsInfos = $checkIfquestionExist->fetch();
      if ($questionsInfos['id_author'] == $_SESSION['id']) {

         $question_title = $questionsInfos['title'];
         $question_description = $questionsInfos['description'];
         $question_content = $questionsInfos['content'];
         $question_date = $questionsInfos['date_publication'];

      } else {
         $errorMsg = "Vous ne pouvez pas modifier cette question car nous n'en êtes pas l'auteur.";
      }

   } else {
      $errorMsg = "Aucune correspondance avec la question n'a été trouvée.";
   }

} else {
   $errorMsg = "Aucune question n'a été trouvée.";
}