<?php
include('controller_kelasMurid.php');
$allteacher = fetchGuruList();
$allStudent = fetchMuridList();
$allMuridGuru = fetchMuridGuruList();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guru - Murid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container p-3">
        <h1>Murid - Guru</h1>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="../Murid/view_student.php">Murid</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Guru/view_teacher.php">Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Murid - Guru</a>
                    </li>
                </ul>
            </div>
            <div class="card-body p-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">Nama Murid</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = 0;
                        foreach ($allteacher as $guruIndex => $guru) {
                            if (isset($allMuridGuru[$guruIndex]) && !empty($allMuridGuru[$guruIndex])) {
                                foreach ($allMuridGuru[$guruIndex] as $muridIndex) {
                                    $counter++;
                        ?>
                                    <tr>
                                        <th scope="row"><?= $counter ?></th>
                                        <td><?= $guru->name ?></td>
                                        <td><?= $allStudent[$muridIndex]->name ?></td>
                                        <td>
                                            <a href="controller_kelasMurid.php?muridID=<?= $muridIndex ?>&guruID=<?= $guruIndex ?>"
                                                class="btn btn-sm btn-danger">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                        <?php
                                }
                            }
                        }

                        if ($counter === 0) {
                            echo '<tr><td colspan="4" class="text-center"><em>No Relations Found</em></td></tr>';
                        }
                        ?>
                    </tbody>
                </table>

                <form method="post" action="controller_kelasMurid.php">
                    <div class="d-flex gap-4 mb-3">
                        <div class="flex-grow-1">
                            <p class="mb-1 fw-bold">Murid</p>
                            <select name="listMurid" class="form-select">
                                <?php foreach ($allStudent as $index => $murid) { ?>
                                    <option value="<?= $index ?>"><?= $murid->name ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="flex-grow-1">
                            <p class="mb-1 fw-bold">Guru</p>
                            <select name="listGuru" class="form-select">
                                <?php foreach ($allteacher as $index => $guru) { ?>
                                    <option value="<?= $index ?>"><?= $guru->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="addRelation">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>