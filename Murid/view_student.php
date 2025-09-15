<!DOCTYPE html>
<html lang="en">
<?php
require("controller_student.php");


$allList = fetchMuridList();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container p-3">
        <h1>Murid</h1>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Daftar Murid</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_addstudent.php">Tambah Murid</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Guru_Murid/view_kelasMurid.php">Murid - Guru</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No. Telepon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = 0;
                        foreach ($allList as $index => $murid) {
                            $counter++;
                        ?>
                            <tr>
                                <th scope="row"><?= $counter ?></th>
                                <td><?= $murid->name ?></td>
                                <td><?= $murid->phone ?></td>
                                <td><?= $murid->email ?></td>
                                <td><?= $murid->birthdate ?></td>
                                <td>
                                    <a href="view_updatestudent.php?studentID=<?= $index ?>">
                                        <button class="btn btn-warning">Update</button>
                                    </a>
                                    <a href="controller_student.php?deleteID=<?= $index ?>">
                                        <button class="btn btn-danger">Delete</button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>