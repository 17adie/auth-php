<?php

class SessionManager {

    public function startSession() {
        session_start();
    }

    public function setSessionVariables(array $data) {
        $setValues = [];
    
        foreach ($data as $key => $value) {
            $_SESSION[$key] = $value;
            $setValues[$key] = $value;
        }
    
        return $setValues;
    }

    public function getSessionVariables(array $keys) {
        $result = [];
        foreach ($keys as $key) {
            $result[$key] = isset($_SESSION[$key]) ? $_SESSION[$key] : null;
        }
        return $result;
    }

    public function destroySession() {
            // Unset all session variables
            session_unset();
    
            // Destroy the session
            session_destroy();
    
            // Unset the session cookie
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                    $params["secure"], $params["httponly"]
                );
            }

    }

}

?>
