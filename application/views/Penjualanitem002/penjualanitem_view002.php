<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Master Data Penjualan Item</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

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
    margin-bottom:18px;
    font-size:16px;
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
    font-size:15px;
}

.table thead th{
    text-align:center;
    vertical-align:middle;
    font-weight:bold;
    padding:12px;
}

.table tbody td{
    vertical-align:middle;
}

.table tbody tr:hover{
    background:#eef5ff;
    transition:.3s;
}

.badge-sale{
    background:#0d6efd;
    color:white;
    padding:6px 15px;
    border-radius:20px;
    font-size:14px;
}

.badge-product{
    background:#20c997;
    color:white;
    padding:6px 15px;
    border-radius:20px;
    font-size:14px;
}

.badge-qty{
    background:#ffc107;
    color:#000;
    padding:6px 15px;
    border-radius:20px;
    font-weight:bold;
    font-size:14px;
}

.btn{
    border-radius:10px;
}

.footer{
    text-align:right;
    margin-top:20px;
    color:#666;
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
<i class="fa-solid fa-box"></i>
Barang
</a>

<a href="<?= site_url('pelanggan002') ?>">
<i class="fa-solid fa-users"></i>
Pelanggan
</a>

<a href="<?= site_url('penjualan002') ?>">
<i class="fa-solid fa-cart-shopping"></i>
Penjualan
</a>

<a href="<?= site_url('PenjualanItem002') ?>" class="active">
<i class="fa-solid fa-receipt"></i>
Penjualan Item
</a>

</div>

</div>

<div class="card-body">

<div class="d-flex justify-content-between align-items-center mb-3">

    <h3 class="text-primary mb-0">
        <i class="fa-solid fa-file-invoice"></i>
        Master Data Penjualan Item
    </h3>

    <div class="d-flex">

        <form action="<?= site_url('PenjualanItem002') ?>" method="GET" class="me-2">

            <div class="input-group">

                <input
                    type="text"
                    name="keyword"
                    class="form-control"
                    placeholder="Cari kode penjualan / barang..."
                    value="<?= $this->input->get('keyword'); ?>">

                <button class="btn btn-primary" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>

            </div>

        </form>

        <a href="<?= site_url('PenjualanItem002') ?>" class="btn btn-secondary me-2">
            <i class="fa-solid fa-rotate-left"></i>
        </a>

        <a href="<?= site_url('PenjualanItem002/create') ?>" class="btn btn-success">
            <i class="fa-solid fa-plus"></i>
            Tambah Item
        </a>

    </div>

</div>

<table class="table table-bordered table-hover align-middle">

<thead>

<tr>

<th width="60">No</th>

<th width="220">Kode Penjualan</th>

<th width="220">Kategori</th>

<th width="150">Stok</th>

<th width="180">Aksi</th>

</tr>

</thead>

<tbody>

<?php
$no=1;
foreach($penjualan_item as $item):
?>

<tr>

<td class="text-center"><?= $no++ ?></td>

<td class="text-center">

<span class="badge-sale">

<i class="fa-solid fa-cart-shopping"></i>

<?= $item->kode_penjualan ?>

</span>

</td>

<td class="text-center">

<span class="badge-product">

<i class="fa-solid fa-box"></i>

<?= $item->kode_barang ?>

</span>

</td>

<td class="text-center">

<span class="badge-qty">

<?= $item->Qty ?>

</span>

</td>

<td class="text-center">

<a href="<?= site_url('PenjualanItem002/edit/'.$item->id_penjualan) ?>"
class="btn btn-warning btn-sm">

<i class="fa-solid fa-pen"></i>

Edit

</a>

<a href="<?= site_url('PenjualanItem002/delete/'.$item->id_penjualan) ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus data?')">

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