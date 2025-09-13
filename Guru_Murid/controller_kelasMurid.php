<?php
include_once(__DIR__ . '/../init.php');
include_once('../Guru/controller_teacher.php');
include_once('../Murid/controller_student.php');

if(!isset($_SESSION['muridGuruList'])) {
    $_SESSION['muridGuruList'] = array();
}

function assignMuridGuru($muridIndex, $guruIndex) {
    //Jika belum terbuat array dengan index nama guru, maka array akan dibuat

    if(!isset($_SESSION['muridGuruList'][$guruIndex])) {
        $_SESSION['muridGuruList'][$guruIndex] = array();
    }
    //Jika nama murid tidak ada dalam array muridGuruList, maka murid akan
    //dimasukan pada bagian dengan nama guru yang sama
    //Andi -> Bapak Daniel, Laurel -> Bapak Daniel
    if(!in_array($muridIndex, $_SESSION['muridGuruList'][$guruIndex])) {
        $_SESSION['muridGuruList'][$guruIndex][] = $muridIndex;
    }
}

//untuk mengirim semua data array keluar
function fetchMuridGuruList() {
    return $_SESSION['muridGuruList'];
}

function deleteMuridGuru($muridIndex, $guruIndex) {
    //Jika ada langsug masuk ke if
    if(isset($_SESSION['muridGuruList'][$guruIndex])) {
        //Cari index di listnya
        $key = array_search($muridIndex, $_SESSION['muridGuruList'][$guruIndex]);
        //
        if($key !== false) {
            unset($_SESSION['muridGuruList'][$guruIndex][$key]);
            $_SESSION['muridGuruList'][$guruIndex] = array_values($_SESSION['muridGuruList'][$guruIndex]);
        } 
    }
}

if(isset($_GET['muridID']['guruID'])) {
    $muridIndex = $_GET('muridID');
    $guruIndex = $_GET('guruID');
    deleteMuridGuru($muridIndex, $guruIndex);
    header('Location: view_kelasMurid.php');
}

if(isset($_SESSION['addRelation'])) {
    $muridIndex = $_POST['listMurid'];
    $guruIndex = $_POST['listGuru'];

    assignMuridGuru($muridIndex, $guruIndex);
    header('Location: view_kelasMurid.php');
}
?>