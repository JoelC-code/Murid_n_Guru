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
                        <a class="nav-link active" href="#">Murid Guru</a>
                    </li>
                </ul>
            </div>
            <div class="card-body p-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Murid</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = 0;
                        foreach ($allteacher as $guruIndex => $guru) {
                            $counter++;
                        ?>
                            <tr>
                                <th scope="row"><?= $counter ?></th>
                                <td><?= $guru->name ?></td>
                                <td>
                                    <?php if (isset($allMuridGuru[$guruIndex])) {
                                        echo "<ul class='list-unstyled'>;";
                                        foreach ($allMuridGuru[$guruIndex] as $muridIndex) {
                                            echo "<li>" . $allStudent[$muridIndex]->name . "</li>";
                                        }
                                        echo "</ul>";
                                    } else {
                                        echo "<em>No Student</em>";
                                    } ?>
                                </td>
                                <td>
                                    <a href="controller_kelasMurid.php?muridID=<?= $muridIndex ?>&guruID=<?= $guruIndex ?>" class="btn btn-sm btn-danger ms-2">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

                <form method="post" action="controller_kelasMurid.php">
                    <div class="d-flex gap-4 mb-3">
                        <select name="listMurid" class="form-select">
                            <?php
                            foreach ($allStudent as $index => $murid) {
                            ?>
                                <option value=<?= $index ?>><?= $murid->name ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <select name="listGuru" class="form-select">
                            <?php
                            foreach ($allteacher as $index => $guru) {
                            ?>
                                <option value=<?= $index ?>><?= $guru->name ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit" name="addRelation">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>