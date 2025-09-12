<?php 
require('../Guru/model_teacher.php');
require('../Murid/model_student.php');

$muridList = fetchMuridList();
$guruList = fetchGuruList();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guru - Murid</title>
</head>
<body>
    <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="../Murid/view_student.php">Daftar Murid</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Guru/view_teacher.php">Daftar Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Tambah Guru</a>
                    </li>
                </ul>
            </div>
</body>
</html>