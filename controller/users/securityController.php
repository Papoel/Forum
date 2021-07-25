<?php
session_start();

// Si aucun utilisateur n'est sauvegardé dans la session je redirige vers login
if(!isset($_SESSION['auth'])) {
   header('Location: login.php');
}