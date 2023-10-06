<?php

/** USING CLASS */

// Include the SessionManager class
require_once '../../model/SessionManager.php';

// Creating an instance of the SessionManager
$sessionManager = new SessionManager();

// Starting the session
$sessionManager->startSession();

// Setting multiple session variables
$dataToSet = [
  'username' => 'admin',
  'email' => 'admin@example.com',
  'role' => 'admin'
];
// Set the session variables and get the values that were set
$setValues = $sessionManager->setSessionVariables($dataToSet);

// $setValues now contains the values that were set in the session
echo json_encode($setValues);



/** NORMAL */

// session_start();

// $_SESSION['username'] = "admin";

// // Access session variables
// $username = $_SESSION['username'];

// // Do something with $username, or send it back to the frontend
// // echo json_encode(['username' => $username]);
// echo json_encode(['username' => $username]);