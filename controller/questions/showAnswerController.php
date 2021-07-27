<?php

require('controller/database.php');

$getAllAnswersofQuestion = $db->prepare(
   'SELECT 
   id_author, 
   pseudo_author, 
   id_question, 
   content 
   FROM answers 
   WHERE id_question = ?
   ORDER BY id DESC',
);
$getAllAnswersofQuestion -> execute(array($idQuestion));