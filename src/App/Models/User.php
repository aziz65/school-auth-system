<?php

class User {
    private $db;
    private $table = 'users';
    
    public function __construct($database) {
        $this->db = $database;
    }
    
    public function register($username, $password) {
        $hashedPassword = $this->hashPassword($password);
        $stmt = $this->db->prepare("INSERT INTO {$this->table} (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        return $stmt->execute();
    }
    
    public function login($username, $password) {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user && $this->verifyPassword($password, $user['password'])) {
            session_start();
            $_SESSION['user'] = $user['id']; // Assuming the user id is stored in the session
            return true;
        }
        return false;
    }
    
    public function logout() {
        session_start();
        session_unset();
        session_destroy();
    }
    
    public function isLoggedIn() {
        session_start();
        return isset($_SESSION['user']);
    }
    
    public function getLoggedInUser() {
        session_start();
        return $_SESSION['user'] ?? null;
    }
    
    private function hashPassword($password) {
        return password_hash($password, PASSWORD_BCRYPT);
    }
    
    private function verifyPassword($password, $hashedPassword) {
        return password_verify($password, $hashedPassword);
    }
}

?>