<?php
session_start();

// Détruire la session
$_SESSION = [];
session_destroy();

// rediriger vers le login
header('Location: ../../login.php');