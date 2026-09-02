<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h3 class="text-center">Tambah Data Barang</h3>
    
    <form action="<?= site_url('barang002/store') ?>" method="post">
        <div class="form-group">
            <label>kode barang</label>
            <input type="text" name="kode_barang" class="form-control" required>
        </div>
        <div class="form-group">
            <label>nama barang</label>
            <input type="text" name="nama_barang" class="form-control" required>
        </div>
        <div class="form-group">
            <label>harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= site_url('barang002') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
