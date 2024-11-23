<?php
session_start();

// Détruire les variables de session
$_SESSION = [];

// Détruire le cookie de session (optionnel, pour vraiment nettoyer)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Détruire la session côté serveur
session_destroy();

// Rediriger ou afficher un message
header('Location: index.php');
exit;
