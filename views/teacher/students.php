<?php

// Check if user is logged in as a teacher
session_start();

if(!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'teacher') {
    die('Access denied.');
}

// Include database connection
include('../config/db.php');

// Fetch list of students
$query = "SELECT * FROM students ORDER BY last_name";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<h1>Student Management</h1>';
    echo '<table>';
    echo '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Actions</th></tr>';

    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['first_name'] . '</td>';
        echo '<td>' . $row['last_name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a> | <a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo '<p>No students found.</p>';
}

$conn->close();
?>