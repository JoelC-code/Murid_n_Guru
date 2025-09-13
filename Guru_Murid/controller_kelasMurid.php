<?php 
require('../Guru/model_teacher.php');
require('../Murid/model_student.php');
session_start();

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
    if(isset($_SESSION['muridGuruList'][$guruIndex])) {
        $key = array_search($muridIndex, $_SESSION['muridGuruList'][$guruIndex]);
        if($key !== false) {
            unset($_SESSION['relationList'][$guruIndex][$key]);
            $_SESSION['muridGuruList'][$guruIndex] = array_values($_SESSION['relationList'][$guruIndex]);
        } 
    }
}
?>