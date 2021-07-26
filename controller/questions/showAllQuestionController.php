<?php

require('controller/database.php');

// Récupérer les questions par défaut sans recherche
$getAllQuestions = $db -> query(
   'SELECT id, id_author, title, description, pseudo_author, date_publication 
   FROM questions ORDER BY ID DESCLIMIT 0, 5'
);

// Vérifier si une rechereche et demandé par l'utilsateur
if(isset($_GET['search']) && !empty($_GET['search'])) {

// La recherche
   $userSearch = $_GET['search'];

// Récupérer toutes les questions qui correspondent à la recherche (en fonction du titre)
   $getAllQuestions = $db -> query(
      'SELECT id, id_author, title, description, pseudo_author, date_publication 
      FROM questions WHERE title LIKE "%'.$userSearch.'%" ORDER BY id DESC');

}


