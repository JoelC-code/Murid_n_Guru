<?php
include("model_teacher.php");
session_start();

if (!isset($_SESSION['teacherList'])) {
    $_SESSION['teacherList'] = array();
}

function createTeacher()
{
    $member = new model_teacher();
    $member->name = $_POST['inputName'];
    $member->phone = $_POST['inputPhone'];
    $member->address = $_POST['inputAddress'];
    $member->note = $_POST['inputNote'];
    array_push($_SESSION['teacherList'], $member);
}

function updateTeacher($teacherID)
{
    $member = $_SESSION['teacherList'][$teacherID];
    $member->name = $_POST['inputName'];
    $member->phone = $_POST['inputPhone'];
    $member->address = $_POST['inputAddress'];
    $member->note = $_POST['inputNote'];
}

function fetchGuruList(){
    return $_SESSION['teacherList'];
}

function deleteTeacher($teacherIndex){
    unset($_SESSION['teacherList'][$teacherIndex]);
}

function getTeacherWithID($teacherID){
    return $_SESSION['teacherList'][$teacherID];
}

if(isset($_POST['button_register'])){
    createTeacher();
    header("Location:view_teacher.php");
}

if(isset($_GET['deleteID'])){
    deleteTeacher($_GET['deleteID']);
    header("Location:view_teacher.php");
}

if(isset($_POST['button_update'])){
    updateTeacher($_POST['input_id']);
    header("Location:view_teacher.php");
}
