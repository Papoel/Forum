<?php

require('controller/database.php');

//Vérifier si l'id de la question est rentrée dans l'URL 
if (isset($_GET['id']) and !empty($_GET['id'])) {

   //Récupérer l'identifiant de la question
   $idQuestion = $_GET['id'];

   //Vérifier si la question existe
   $checkIfQuestionExists = $db->prepare('SELECT * FROM questions WHERE id = ?');
   $checkIfQuestionExists->execute(array($idQuestion));

   if ($checkIfQuestionExists->rowCount() > 0) {

      //Récupérer toutes les datas de la questions
      $questionsInfos = $checkIfQuestionExists->fetch();

      //Stocker les datas de la question dans des variables propres.
      $question_title = $questionsInfos['title'];
      $question_description = $questionsInfos['description'];
      $question_content = $questionsInfos['content'];
      $question_id_author = $questionsInfos['id_author'];
      $question_pseudo_author = $questionsInfos['pseudo_author'];
      $question_publication_date = $questionsInfos['date_publication'];

   } else {
      $errorMsg = "Aucune question n'a été trouvée.";
   }
   
} else {
   $errorMsg = "Aucune question n'a été trouvée.";
}