<?php

require('models/database.php');

// Récupérer les questions posé par l'utilisateur connecté grâce à la session
$getAllMyQuestions = $db->prepare('SELECT id, title, description, pseudo_author, date_publication FROM questions WHERE id_author = ? ORDER BY date_publication DESC');
$getAllMyQuestions->execute(array($_SESSION['id']));