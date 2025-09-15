<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container p-3">
        <h1>Murid Baru</h1>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="view_student.php">Daftar Murid</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Tambah Murid</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Guru_Murid/view_kelasMurid.php">Murid - Guru</a>
                    </li>
                </ul>
            </div>
            <form method="post" action="controller_student.php" class="p-3">
                <div class="form-row">
                    <label for="inputName4">Nama</label>
                    <input type="text" name="studentName" class="form-control" id="inputPassword4" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="emailAddress" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="inputPhone">No. Telepon</label>
                    <input type="number" name="phoneNumber" class="form-control" id="inputPhone" placeholder="+xx-xxxx-xxxx">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Tanggal Lahir</label>
                    <input type="date" name="birthDate" class="form-control" id="inputBirthdate" placeholder="dd/mm/yyyy">
                </div>
                <button type="submit" name="registStudent" class="btn btn-primary p-2 mt-2">Add Student</button>
            </form>
        </div>
    </div>
</body>

</html>