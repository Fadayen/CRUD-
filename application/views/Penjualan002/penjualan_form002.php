<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= isset($penjualan) ? 'Edit Penjualan' : 'Tambah Penjualan' ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
    background:linear-gradient(135deg,#16245d,#1d4ed8);
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:'Segoe UI',sans-serif;
}

.card{
    width:700px;
    border:none;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 20px 45px rgba(0,0,0,.35);
}

.card-header{
    background:linear-gradient(90deg,#2563eb,#06b6d4);
    color:white;
    text-align:center;
    padding:30px;
}

.card-header h2{
    margin:0;
    font-weight:700;
}

.card-header p{
    margin-top:8px;
    margin-bottom:0;
    opacity:.9;
}

.card-body{
    background:white;
    padding:35px;
}

.form-label{
    font-weight:600;
    margin-bottom:8px;
}

.input-group-text{
    background:#2563eb;
    color:white;
    border:none;
    width:50px;
    justify-content:center;
}

.form-control{
    border-radius:0 10px 10px 0;
    height:48px;
}

.form-control:focus{
    border-color:#2563eb;
    box-shadow:0 0 10px rgba(37,99,235,.25);
}

.btn{
    border-radius:10px;
    padding:10px 22px;
    font-weight:600;
}

.footer{
    text-align:center;
    margin-top:20px;
    color:#666;
    font-size:15px;
}

</style>

</head>

<body>

<div class="card">

<div class="card-header">

<h2>

<i class="fa-solid fa-cart-shopping"></i>

<?= isset($penjualan) ? 'Edit Data Penjualan' : 'Tambah Data Penjualan' ?>

</h2>

<p>PT Sejahtera Jaya Elektronik</p>

</div>

<div class="card-body">

<form method="post"
action="<?= isset($penjualan) ? site_url('penjualan002/update') : site_url('penjualan002/store') ?>">

<!-- Kode Penjualan -->

<div class="mb-3">

<label class="form-label">

Kode Penjualan

</label>

<div class="input-group">

<span class="input-group-text">

<i class="fa-solid fa-barcode"></i>

</span>

<input
type="number"
name="kode_penjualan"
class="form-control"
value="<?= isset($penjualan) ? $penjualan->kode_penjualan : '' ?>"
<?= isset($penjualan) ? 'readonly' : '' ?>
required>

</div>

</div>

<!-- Tanggal Penjualan -->

<div class="mb-3">

<label class="form-label">

Tanggal Penjualan

</label>

<div class="input-group">

<span class="input-group-text">

<i class="fa-solid fa-calendar-days"></i>

</span>

<input
type="date"
name="tanggal_penjualan"
class="form-control"
value="<?= isset($penjualan) ? $penjualan->tanggal_penjualan : '' ?>"
required>

</div>

</div>

<!-- Kode Pelanggan -->

<div class="mb-4">

<label class="form-label">

Kode Pelanggan

</label>

<div class="input-group">

<span class="input-group-text">

<i class="fa-solid fa-user"></i>

</span>

<input
type="text"
name="kode_pelanggan"
class="form-control"
placeholder="Contoh : P0001"
value="<?= isset($penjualan) ? $penjualan->kode_pelanggan : '' ?>"
required>

</div>

</div>

<div class="d-flex justify-content-between">

<a href="<?= site_url('penjualan002') ?>" class="btn btn-secondary">

<i class="fa-solid fa-arrow-left"></i>

Kembali

</a>

<button type="submit" class="btn btn-success">

<i class="fa-solid fa-floppy-disk"></i>

<?= isset($penjualan) ? 'Update Data' : 'Simpan Data' ?>

</button>

</div>

</form>

</div>

</div>

<div class="footer">

<i class="fa-solid fa-user"></i>

Fadayen Nurhidayat |

<?= date('d F Y') ?>

</div>

</body>

</html>