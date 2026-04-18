<?php

// Validation functions
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function validatePhoneNumber($number) {
    return preg_match('/^[0-9]{10}$/', $number);
}

// Security functions
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags($input));
}

function generateToken($length = 32) {
    return bin2hex(random_bytes($length));
}

// Helper functions
function redirectTo($url) {
    header('Location: ' . $url);
    exit();
}

function flashMessage($message) {
    $_SESSION['flash_message'] = $message;
}

?>