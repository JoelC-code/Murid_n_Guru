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
        <h1>Guru Baru</h1>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="view_teacher.php">Daftar Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view_addteacher.php">Tambah Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Guru_Murid/view_kelasMurid.php">Murid - Guru</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h1>Guru Baru</h1>
                <form method="POST" action="controller_teacher.php">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputName" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="inputName" placeholder="Masukkan nama">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputPhone" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" name="inputPhone" placeholder="Masukkan nomor telepon">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="inputAddress" placeholder="Masukkan alamat">
                        </div>
                        <div class="form-group">
                            <label for="inputNote" class="form-label">Catatan</label>
                            <input type="text" class="form-control" name="inputNote" placeholder="Masukkan catatan">
                        </div>
                    </div>
                    <button name="button_register" type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>