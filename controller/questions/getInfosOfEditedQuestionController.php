<?php

require('controller/database.php');

// Vérifier si l'id de la question est bien passé en paramètre dans l'url
if (isset($_GET['id']) && !empty($_GET['id'])) {

   $idQuestion = $_GET['id'];

   // Vérifier si la question existe
   $checkIfquestionExist = $db->prepare('SELECT * FROM questions WHERE id = ?');
   $checkIfquestionExist->execute(array($idQuestion));

   if ($checkIfquestionExist->rowCount() > 0) {

      // Récupérer les données de la question
      $questionsInfos = $checkIfquestionExist->fetch();
      if ($questionsInfos['id_author'] == $_SESSION['id']) {

         $question_title       = $questionsInfos['title'];
         $question_description = $questionsInfos['description'];
         $question_content     = $questionsInfos['content'];

         // Supprimer l'affichage des balises <br />
         $question_description = str_replace('<br />', '', $question_description);
         $question_content     = str_replace('<br />', '', $question_content);
      } else {
         $errorMsg = "Vous ne pouvez pas modifier cette question car nous n'en êtes pas l'auteur.";
      }
   } else {
      $errorMsg = "Désolé, il semblerait que cette question n'éxiste pas";
   }
} else {
   $errorMsg = "Aucune question n'a été trouvée.";
}
