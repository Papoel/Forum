<?php

require('controller/database.php');


// Validation du formulaire
if (isset($_POST['validate'])) {

   // Vérifer si l'itilisateur a completer tous les chmaps
   if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content'])) {

      // Donnée à faire passer dans la requête
      $new_question_title = htmlspecialchars($_POST['title']);
      $new_question_description = nl2br(htmlspecialchars($_POST['description']));
      $new_question_content = nl2br(htmlspecialchars($_POST['content']));

      // Modification des informations de la question qui possède l'id passé en paramètre
      $editQuestionOnWebsite = $db->prepare('UPDATE questions SET title = ?, description = ?, content = ? WHERE id = ?');
      $editQuestionOnWebsite->execute(array($new_question_title, $new_question_description, $new_question_content, $idQuestion));

      // Rediriger l'utilisateur vers la page listant les questions
      header('Location: my-questions.php');
   } else {
      $errorMsg = "Veuillez compléter tous les champs ...";
   }
}
