<?php

/** USING CLASS */

// Include the SessionManager class
require_once '../../model/SessionManager.php';

// Creating an instance of the SessionManager
$sessionManager = new SessionManager();

// Starting the session
$sessionManager->startSession();

// Destroying the session
$sessionManager->destroySession();

echo json_encode(true);

/** NORMAL */

// session_start();

// // Unset all session variables
// $_SESSION = array();

// // Destroy the session
// session_destroy();


// // Unset the session cookie
// if (ini_get("session.use_cookies")) {
//   $params = session_get_cookie_params();
//   setcookie(session_name(), '', time() - 42000,
//       $params["path"], $params["domain"],
//       $params["secure"], $params["httponly"]
//   );
// } 