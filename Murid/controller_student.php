<?php 
require_once("model_student.php");
session_start();

//Jika array muridList tidak ada, akan dibuat sebuah array
if (!isset($_SESSION['muridList'])) {
    $_SESSION['muridList'] = array();
}

function createStudent() {
    $murid = new student();
    $murid->name = $_POST['studentName'];
    $murid->phone = $_POST['phoneNumber'];
    $murid->email = $_POST['emailAddress'];
    $murid->birthdate = $_POST['birthDate'];
    array_push($_SESSION['muridList'],$murid);
}

function fetchMuridList() {
    return $_SESSION['muridList'];
}

function deleteMurid($index) {
    unset($_SESSION['muridList'][$index]);
    $_SESSION['muridList'] = array_values($_SESSION['muridList']); //delete and reindex the array
}

function getMuridWithID($index) {
    return $_SESSION['muridList'][$index];
}

function updateStudent($index) {
    $muridUpdated = $_SESSION['muridList'][$index];
    $muridUpdated->name = $_POST['studentName'];
    $muridUpdated->phone = $_POST['phoneNumber'];
    $muridUpdated->email = $_POST['emailAddress'];
    $muridUpdated->birthdate = $_POST['birthDate'];
}

//pushing button indicator using GET to delete
if(isset($_GET['deleteID'])) {
    deleteMurid($_GET['deleteID']);
    header("Location:view_student.php");
}

//pushing button indicator using POST to add
if(isset($_POST['registStudent'])) {
    createStudent();
    header("Location:view_student.php");
}

if(isset($_POST['updateStudent'])) {
    updateStudent($_POST['updt_muridId']);
    header("Location:view_student.php");
}
?>