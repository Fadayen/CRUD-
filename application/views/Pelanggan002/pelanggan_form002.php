<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= isset($pelanggan) ? 'Edit Pelanggan' : 'Tambah Pelanggan' ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
    background:linear-gradient(135deg,#0f172a,#1d4ed8);
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:'Segoe UI',sans-serif;
}

.card{
    width:650px;
    border:none;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 20px 45px rgba(0,0,0,.35);
}

.card-header{
    background:linear-gradient(90deg,#2563eb,#06b6d4);
    color:#fff;
    text-align:center;
    padding:30px;
}

.card-header h2{
    margin:0;
    font-weight:700;
}

.card-header p{
    margin-top:8px;
    opacity:.9;
}

.card-body{
    padding:35px;
    background:#fff;
}

.form-label{
    font-weight:600;
}

.form-control,
textarea{
    border-radius:12px;
    padding:12px;
}

.form-control:focus,
textarea:focus{
    border-color:#2563eb;
    box-shadow:0 0 10px rgba(37,99,235,.25);
}

textarea{
    resize:none;
}

.btn{
    border-radius:10px;
    padding:10px 25px;
    font-weight:600;
}

</style>

</head>

<body>

<div class="card">

<div class="card-header">

<h2>

<i class="fa-solid fa-user-plus"></i>

<?= isset($pelanggan) ? 'Edit Data Pelanggan' : 'Tambah Data Pelanggan' ?>

</h2>

<p>PT Sejahtera Jaya Elektronik</p>

</div>

<div class="card-body">

<form method="post"
action="<?= isset($pelanggan) ? site_url('pelanggan002/update') : site_url('pelanggan002/store') ?>">

<!-- Kode Pelanggan -->

<div class="mb-3">

<label class="form-label">

<i class="fa-solid fa-id-card"></i>

Kode Pelanggan

</label>

<input
type="text"
name="kode_pelanggan"
class="form-control"
value="<?= isset($pelanggan) ? $pelanggan->kode_pelanggan : '' ?>"
<?= isset($pelanggan) ? 'readonly' : '' ?>
required>

</div>

<!-- Nama -->

<div class="mb-3">

<label class="form-label">

<i class="fa-solid fa-user"></i>

Nama Pelanggan

</label>

<input
type="text"
name="nama_pelanggan"
class="form-control"
value="<?= isset($pelanggan) ? $pelanggan->nama_pelanggan : '' ?>"
required>

</div>

<!-- Telepon -->

<div class="mb-3">

<label class="form-label">

<i class="fa-solid fa-phone"></i>

Telepon

</label>

<input
type="text"
name="telepon"
class="form-control"
value="<?= isset($pelanggan) ? $pelanggan->telepon : '' ?>"
placeholder="08xxxxxxxxxx"
required>

</div>

<!-- Alamat -->

<div class="mb-4">

<label class="form-label">

<i class="fa-solid fa-location-dot"></i>

Alamat

</label>

<textarea
name="alamat"
class="form-control"
rows="4"
placeholder="Masukkan alamat pelanggan..."
required><?= isset($pelanggan) ? $pelanggan->alamat : '' ?></textarea>

</div>

<div class="d-flex justify-content-between">

<a href="<?= site_url('pelanggan002') ?>" class="btn btn-secondary">

<i class="fa-solid fa-arrow-left"></i>

Kembali

</a>

<button type="submit" class="btn btn-success">

<i class="fa-solid fa-floppy-disk"></i>

<?= isset($pelanggan) ? 'Update Data' : 'Simpan Data' ?>

</button>

</div>

</form>

</div>

</div>

</body>
</html>