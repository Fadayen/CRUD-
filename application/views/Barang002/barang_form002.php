<?php $this->load->view('template/header'); ?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= isset($barang) ? 'Edit Barang' : 'Tambah Barang' ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
    background:linear-gradient(135deg,#0f172a,#1d4ed8);
    min-height:100vh;
    font-family:'Segoe UI',sans-serif;
}

.card{
    border:none;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 20px 40px rgba(0,0,0,.25);
}

.card-header{
    background:linear-gradient(90deg,#2563eb,#06b6d4);
    color:white;
    padding:25px;
}

.card-header h3{
    margin:0;
    font-weight:bold;
}

.form-control{
    border-radius:10px;
    height:48px;
}

.form-control:focus{
    border-color:#2563eb;
    box-shadow:0 0 10px rgba(37,99,235,.3);
}

.btn{
    border-radius:10px;
    padding:10px 25px;
    font-weight:600;
}

.btn-success{
    background:#16a34a;
    border:none;
}

.btn-success:hover{
    background:#15803d;
}

.btn-secondary{
    background:#64748b;
    border:none;
}

label{
    font-weight:600;
}

.card-footer{
    background:#f8f9fa;
}

</style>

</head>

<body>

<div class="container py-5">

<div class="row justify-content-center">

<div class="col-lg-7">

<div class="card">

<div class="card-header text-center">

<h3>

<?php if(isset($barang)): ?>

<i class="fa-solid fa-pen-to-square"></i>
Edit Data Barang

<?php else: ?>

<i class="fa-solid fa-box-open"></i>
Tambah Data Barang

<?php endif; ?>

</h3>

<p class="mb-0 mt-2">
Silakan lengkapi informasi barang.
</p>

</div>

<div class="card-body p-4">

<?= validation_errors('<div class="alert alert-danger">','</div>'); ?>

<form action="<?= isset($barang) ? site_url('barang002/update') : site_url('barang002/store') ?>" method="post">

<?php if(isset($barang)): ?>

<input type="hidden"
name="kode_barang"
value="<?= $barang->kode_barang ?>">

<?php endif; ?>

<div class="mb-3">

<label>
<i class="fa-solid fa-barcode text-primary"></i>
Kode Barang
</label>

<input
type="text"
class="form-control"
name="kode_barang"

value="<?= isset($barang)?$barang->kode_barang:'' ?>"

<?= isset($barang)?'readonly':'' ?>

placeholder="Masukkan kode barang"
required>

</div>

<div class="mb-3">

<label>

<i class="fa-solid fa-box text-success"></i>
Nama Barang

</label>

<input

type="text"

class="form-control"

name="nama_barang"

value="<?= isset($barang)?$barang->nama_barang:'' ?>"

placeholder="Masukkan nama barang"

required>

</div>

<div class="mb-4">

<label>

<i class="fa-solid fa-money-bill-wave text-warning"></i>

Harga

</label>

<input

type="number"

class="form-control"

name="harga"

value="<?= isset($barang)?$barang->harga:'' ?>"

placeholder="Masukkan harga"

required>

</div>

<div class="d-flex justify-content-between">

<a href="<?= site_url('barang002') ?>" class="btn btn-secondary">

<i class="fa-solid fa-arrow-left"></i>

Kembali

</a>

<button type="submit" class="btn btn-success">

<?php if(isset($barang)): ?>

<i class="fa-solid fa-floppy-disk"></i>
Update Data

<?php else: ?>

<i class="fa-solid fa-circle-plus"></i>
Simpan Data

<?php endif; ?>

</button>

</div>

</form>

</div>

<div class="card-footer text-end">

<small class="text-muted">

<i class="fa-solid fa-user"></i>

Fadayen Nurhidayat

&nbsp; | &nbsp;

<?= date('d F Y') ?>

</small>

</div>

</div>

</div>

</div>

</div>

</body>

</html>

<?php $this->load->view('template/footer'); ?>