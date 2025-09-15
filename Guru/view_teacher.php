<?php require("controller_teacher.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container p-3">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="view_teacher.php">Daftar Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_addteacher.php">Tambah Guru</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="../Guru_Murid/view_kelasMurid.php">Murid - Guru</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h1>Daftar Guru</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Catatan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = 0;
                        $allteacher = fetchGuruList();
                        foreach ($allteacher as $index => $member) {
                            $counter++;
                        ?>
                            <tr>
                                <th scope="row"><?= $counter ?></th>
                                <td><?= $member->name ?></td>
                                <td><?= $member->phone ?></td>
                                <td><?= $member->address ?></td>
                                <td><?= $member->note ?></td>
                                <td>
                                    <a href="view_updateteacher.php?updateID=<?= $index ?>">
                                        <button class="btn btn-warning">Update</button>
                                    </a>
                                    <a href="controller_teacher.php?deleteID=<?= $index ?>">
                                        <button class="btn btn-danger">Hapus</button>
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
</body>

</html>