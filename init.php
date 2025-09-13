<?php
// Load all model classes first
include_once __DIR__ . "/Murid/model_student.php";
include_once __DIR__ . "/Guru/model_teacher.php";

// Only then start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>