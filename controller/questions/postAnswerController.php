<?php

require('controller/database.php');

if(isset($_POST['validate'])) {

   if(!empty($_POST['answer'])) {

      $user_answer = nl2br(htmlspecialchars($_POST['answer']));

      $insert_answer = $db->prepare('INSERT INTO answers(id_author, pseudo_author, id_question, content)VALUES(?, ?, ?, ?)');
      $insert_answer->execute(array(
         $_SESSION['id'],
         $_SESSION['pseudo'],
         $idQuestion,
         $user_answer
      ));
   }
}