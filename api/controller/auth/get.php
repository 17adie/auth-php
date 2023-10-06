<?php

/** USING CLASS */

// Include the SessionManager class
require_once '../../model/SessionManager.php';

// Creating an instance of the SessionManager
$sessionManager = new SessionManager();

// Starting the session
$sessionManager->startSession();

// Getting multiple session variables
$keysToGet = ['username', 'email', 'role'];
$sessionData = $sessionManager->getSessionVariables($keysToGet);

/** Check if any of the session variables is null
 * The first parameter is the value you're looking for (null in this case).
 * The second parameter is the array in which you are searching ($sessionData in this case).
 * The third parameter is a boolean flag (true) that enables strict mode. In strict mode, not only the values but also their types must match.
 * So, in_array(null, $sessionData, true) returns true if any element in the $sessionData array is strictly equal to null (both in terms of value and type). If there is at least one null in the array, the condition evaluates to true; otherwise, it evaluates to false.
 */
if (in_array(null, $sessionData, true)) {
  // Destroy the session
  $sessionManager->destroySession();
  echo json_encode($sessionData);
} else {
  // Do something with $sessionData or send it back to the frontend
  echo json_encode($sessionData);
}


/** NORMAL */
// session_start();

// // $_SESSION['username'] = "admin";

// // Access session variables
// $username = $_SESSION['username'];

// // Do something with $username, or send it back to the frontend
// // echo json_encode(['username' => $username]);
// echo json_encode(['username' => $username]);