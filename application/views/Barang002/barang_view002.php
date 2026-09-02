<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Master Data Barang</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body{
            background: linear-gradient(135deg,#0f172a,#1e3a8a);
            min-height:100vh;
            font-family:'Segoe UI',sans-serif;
        }

        .card{
            border:none;
            border-radius:20px;
            box-shadow:0 15px 35px rgba(0,0,0,.25);
        }

        .header{
            background:linear-gradient(90deg,#2563eb,#06b6d4);
            color:white;
            border-radius:20px 20px 0 0;
            padding:30px;
        }

        .header h2{
            font-weight:bold;
        }

        .menu a{
            color:white;
            text-decoration:none;
            margin:0 15px;
            font-weight:600;
            transition:.3s;
        }

        .menu a:hover{
            color:#ffe082;
        }

        .btn-success{
            background:#16a34a;
            border:none;
            border-radius:10px;
            padding:10px 20px;
        }

        .btn-warning{
            color:white;
        }

        .table{
            margin-top:20px;
        }

        .table thead{
            background:#2563eb;
            color:white;
        }

        .table tbody tr:hover{
            background:#eef5ff;
            transform:scale(1.01);
            transition:.2s;
        }

        .badge-price{
            background:#198754;
            color:white;
            padding:8px 12px;
            border-radius:20px;
            font-size:14px;
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

<div class="container py-5">

<div class="card">

<div class="header text-center">

    <h2>
        <i class="fa-solid fa-store"></i>
        PT Sejahtera Jaya Elektronik
    </h2>

    <p class="mb-3">Sistem Informasi Penjualan</p>

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

        <a href="<?= site_url('PenjualanItem002') ?>">
            <i class="fa-solid fa-receipt"></i>
            Penjualan Item
        </a>

    </div>

</div>

<div class="card-body">

<div class="d-flex justify-content-between align-items-center mb-4">

    <h3 class="fw-bold text-primary">
        <i class="fa-solid fa-boxes-stacked"></i>
        Master Data Barang
    </h3>

    <div class="d-flex">

        <form action="<?= site_url('barang002') ?>" method="GET" class="me-2">

            <div class="input-group">

                <input
                    type="text"
                    class="form-control"
                    name="keyword"
                    placeholder="Cari kode atau nama barang..."
                    value="<?= $this->input->get('keyword'); ?>">

                <button class="btn btn-primary" type="submit">

                    <i class="fa-solid fa-magnifying-glass"></i>

                </button>
                <a href="<?= site_url('barang002') ?>" class="btn btn-secondary ms-2">

<i class="fa-solid fa-rotate-left"></i>

</a>

            </div>

        </form>

        <a href="<?= site_url('barang002/create') ?>" class="btn btn-success">

            <i class="fa-solid fa-plus"></i>

            Tambah Barang

        </a>

    </div>

</div>

<table class="table table-hover table-bordered align-middle">

<thead class="text-center">

<tr>

<th width="70">No</th>

<th>ID</th>

<th>Nama Barang</th>

<th width="180">Harga</th>

<th width="180">Aksi</th>

</tr>

</thead>

<tbody>

<?php
$no=1;
foreach($barang as $brg):
?>

<tr>

<td class="text-center"><?= $no++ ?></td>

<td><?= $brg->kode_barang ?></td>

<td><?= $brg->nama_barang ?></td>

<td class="text-center">
<span class="badge-price">
Rp <?= number_format($brg->harga,0,',','.') ?>
</span>
</td>

<td class="text-center">

<a href="<?= site_url('Barang002/edit/'.$brg->kode_barang) ?>" class="btn btn-warning btn-sm">
<i class="fa-solid fa-pen"></i>
Edit
</a>

<a href="<?= site_url('Barang002/delete/'.$brg->kode_barang) ?>"
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