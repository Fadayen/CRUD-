<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Master Data Pelanggan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
    background:linear-gradient(135deg,#16245d,#1d4ed8);
    min-height:100vh;
    font-family:'Segoe UI',sans-serif;
}

.container{
    max-width:1450px;
}

.card{
    border:none;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 15px 35px rgba(0,0,0,.25);
}

.card-header{
    background:linear-gradient(90deg,#2563eb,#11b7d8);
    color:white;
    text-align:center;
    padding:28px 20px;
}

.card-header h2{
    font-size:28px;
    font-weight:700;
    margin-bottom:8px;
}

.card-header p{
    font-size:16px;
    margin-bottom:18px;
}

.menu{
    display:flex;
    justify-content:center;
    gap:42px;
}

.menu a{
    color:#fff;
    text-decoration:none;
    font-size:16px;
    font-weight:600;
    transition:.3s;
}

.menu a i{
    margin-right:6px;
}

.menu a:hover{
    color:#ffd54f;
}

.menu a.active{
    color:#ffd54f;
    border-bottom:2px solid #ffd54f;
    padding-bottom:5px;
}

.card-body{
    padding:18px;
}

.card-body h3{
    font-size:22px;
    font-weight:700;
}

.table{
    margin-top:15px;
    font-size:16px;
}

.table thead th{
    text-align:center;
    vertical-align:middle;
    padding:12px;
    font-weight:700;
}

.table tbody td{
    vertical-align:middle;
    padding:10px;
}

.table tbody tr:hover{
    background:#eef5ff;
}

.btn-success{
    border-radius:12px;
    padding:10px 18px;
    font-weight:600;
}

.btn-warning,
.btn-danger{
    border-radius:8px;
    padding:4px 10px;
}

.badge-phone{
    background:#198754;
    color:white;
    padding:6px 14px;
    border-radius:20px;
    font-size:14px;
}

.badge-phone i{
    margin-right:4px;
}

.footer{
    text-align:right;
    margin-top:18px;
    color:#555;
    font-size:16px;
    font-weight:600;
}

</style>

</head>

<body>

<div class="container mt-5 mb-5">

<div class="card">

<div class="card-header">

<h2>
<i class="fa-solid fa-store"></i>
PT Sejahtera Jaya Elektronik
</h2>

<p>Sistem Informasi Penjualan</p>

<div class="menu">

<a href="<?= site_url('barang002') ?>">
<i class="fa-solid fa-box"></i> Barang
</a>

<a href="<?= site_url('pelanggan002') ?>" class="active">
<i class="fa-solid fa-users"></i> Pelanggan
</a>

<a href="<?= site_url('penjualan002') ?>">
<i class="fa-solid fa-cart-shopping"></i> Penjualan
</a>

<a href="<?= site_url('PenjualanItem002') ?>">
<i class="fa-solid fa-receipt"></i> Penjualan Item
</a>

</div>

</div>

<div class="card-body">

<div class="d-flex justify-content-between align-items-center mb-3">

    <h3 class="text-primary mb-0">
        <i class="fa-solid fa-address-book"></i>
        Master Data Pelanggan
    </h3>

    <div class="d-flex">

        <form action="<?= site_url('pelanggan002') ?>" method="GET" class="me-2">

            <div class="input-group">

                <input
                    type="text"
                    name="keyword"
                    class="form-control"
                    placeholder="Cari kode atau nama pelanggan..."
                    value="<?= $this->input->get('keyword'); ?>">

                <button class="btn btn-primary" type="submit">

                    <i class="fa-solid fa-magnifying-glass"></i>

                </button>

            </div>

        </form>

        <a href="<?= site_url('pelanggan002') ?>" class="btn btn-secondary me-2">

            <i class="fa-solid fa-rotate-left"></i>

        </a>

        <a href="<?= site_url('pelanggan002/create') ?>" class="btn btn-success">

            <i class="fa-solid fa-user-plus"></i>

            Tambah Pelanggan

        </a>

    </div>

</div>

<table class="table table-bordered table-hover align-middle">

<thead>

<tr>

<th width="60">No</th>

<th width="180">Kode Pelanggan</th>

<th>Nama Pelanggan</th>

<th width="180">Telepon</th>

<th>Alamat</th>

<th width="170">Aksi</th>

</tr>

</thead>

<tbody>

<?php
$no=1;
foreach($pelanggan as $p):
?>

<tr>

<td class="text-center"><?= $no++ ?></td>

<td><?= $p->kode_pelanggan ?></td>

<td><?= $p->nama_pelanggan ?></td>

<td class="text-center">

<span class="badge-phone">

<i class="fa-solid fa-phone"></i>

<?= $p->telepon ?>

</span>

</td>

<td><?= $p->alamat ?></td>

<td class="text-center">

<a href="<?= site_url('pelanggan002/edit/'.$p->kode_pelanggan) ?>" class="btn btn-warning btn-sm">

<i class="fa-solid fa-pen"></i>

Edit

</a>

<a href="<?= site_url('pelanggan002/delete/'.$p->kode_pelanggan) ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus data pelanggan?')">

<i class="fa-solid fa-trash"></i>

Hapus

</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

<div class="footer">

<i class="fa-solid fa-user"></i>

Fadayen Nurhidayat |

<?= date('d F Y') ?>

</div>

</div>

</div>

</div>

</body>

</html>