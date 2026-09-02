<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= isset($penjualan_item) ? 'Edit Penjualan Item' : 'Tambah Penjualan Item' ?></title>

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
    background:#fff;
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

<i class="fa-solid fa-file-invoice"></i>

<?= isset($penjualan_item) ? 'Edit Data Penjualan Item' : 'Tambah Data Penjualan Item' ?>

</h2>

<p>PT Sejahtera Jaya Elektronik</p>

</div>

<div class="card-body">

<form method="post"
action="<?= isset($penjualan_item) ? site_url('PenjualanItem002/update') : site_url('PenjualanItem002/store') ?>">

<?php if(isset($penjualan_item)): ?>

<input type="hidden"
name="id_penjualan"
value="<?= $penjualan_item->id_penjualan ?>">

<?php endif; ?>

<!-- Kode Penjualan -->

<div class="mb-3">

<label class="form-label">

Kode Penjualan

</label>

<div class="input-group">

<span class="input-group-text">

<i class="fa-solid fa-cart-shopping"></i>

</span>

<input
type="text"
name="kode_penjualan"
class="form-control"
placeholder="Contoh : PJ001"
value="<?= isset($penjualan_item) ? $penjualan_item->kode_penjualan : '' ?>"
required>

</div>

</div>

<!-- Kode Barang -->

<div class="mb-3">

<label class="form-label">

Kode Barang

</label>

<div class="input-group">

<span class="input-group-text">

<i class="fa-solid fa-box"></i>

</span>

<input
type="text"
name="kode_barang"
class="form-control"
placeholder="Contoh : BR001"
value="<?= isset($penjualan_item) ? $penjualan_item->kode_barang : '' ?>"
required>

</div>

</div>

<!-- Qty -->

<div class="mb-4">

<label class="form-label">

Jumlah (Qty)

</label>

<div class="input-group">

<span class="input-group-text">

<i class="fa-solid fa-layer-group"></i>

</span>

<input
type="number"
name="Qty"
class="form-control"
placeholder="Masukkan jumlah barang"
min="1"
value="<?= isset($penjualan_item) ? $penjualan_item->Qty : '' ?>"
required>

</div>

</div>

<div class="d-flex justify-content-between">

<a href="<?= site_url('PenjualanItem002') ?>" class="btn btn-secondary">

<i class="fa-solid fa-arrow-left"></i>

Kembali

</a>

<button type="submit" class="btn btn-success">

<i class="fa-solid fa-floppy-disk"></i>

<?= isset($penjualan_item) ? 'Update Data' : 'Simpan Data' ?>

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