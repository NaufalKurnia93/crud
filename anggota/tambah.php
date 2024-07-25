k<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- cdn css bootstrap start -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- cdn css bootstrap end-->
    <title>Tambah anggota</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h3 class="text-center">Tambah Anggota</h3>
                   
                </div>
                <div class="card-body p-4">
                    <form action="simpan.php" method="POST">
                       

                        <div class="form-group mb-2">
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="Masukkan Nama lengkap " class="form-control">
                        </div>

                        <div class="form-group mb-2">
                            <label>Alamat</label>
                            <input type="text" name="alamat" placeholder="Masukkan Alamat anda" class="form-control">
                        </div>

                        <div class="form-group mb-2">
                            <label>no Telpon</label>
                            <input type="text" name="no_telpon" placeholder="Masukkan nomor Telepon Aktive" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-danger">RESET</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-    3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>