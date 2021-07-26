<?php
session_start();
require('models/database.php');

// var_dump($_SESSION['id'], $_SESSION['pseudo']);

//Valider le formulaire
if (isset($_POST['validate'])) {

   //Vérifier si les champs ne sont pas vides
   if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content'])) {

      //Les données de la question
      $question_title = htmlspecialchars($_POST['title']);
      $question_description = nl2br(htmlspecialchars($_POST['description']));
      $question_content = nl2br(htmlspecialchars($_POST['content']));
      $question_date = date('d/m/Y H:i');
      $question_id_author = $_SESSION['id'];
      $question_pseudo_author = $_SESSION['pseudo'];

      //Insérer la question en base de donnée
      $insertQuestionOnWebsite = $db->prepare('INSERT INTO questions(title, description, content, id_author, pseudo_author, date_publication)VALUES(?, ?, ?, ?, ?, ?)');
      $insertQuestionOnWebsite->execute(
         array(
            $question_title,
            $question_description,
            $question_content,
            $question_id_author,
            $question_pseudo_author,
            $question_date
         )
      );

      $successMsg = "Votre question a bien été publiée sur le site";
   } else {
      $errorMsg = "Veuillez compléter tous les champs...";
   }
}
