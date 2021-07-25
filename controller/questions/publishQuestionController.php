<?php

require('models/database.php');

if (isset($_POST['validate'])) {

   if (
      !empty($POST['title']) &&
      !empty($POST['categoty']) &&
      !empty($POST['description']) &&
      !empty($POST['content'])
   ) {
      // ...Code
   } else {
      $errorMsg = "Veuillez compléter tous les champs ...";
   }

}