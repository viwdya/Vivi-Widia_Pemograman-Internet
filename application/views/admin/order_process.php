<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pesanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body { background: #f4f6fb; }
        .sidebar { background: #263159; min-height: 100vh; color: #fff; padding-top: 30px; }
        .sidebar .nav-link { color: #fff; font-weight: 500; margin-bottom: 10px; }
        .sidebar .nav-link.active, .sidebar .nav-link:hover { background: #435585; border-radius: 8px; }
        .sidebar .fa { margin-right: 10px; }
        .header { background: #fff; padding: 18px 32px; border-bottom: 1px solid #e0e0e0; display: flex; align-items: center; justify-content: space-between; }
        .header .admin-info { font-weight: 600; color: #263159; }
        .main-content { padding: 32px 32px 0 32px; }
        .order-header { background: #3578e5; color: #fff; padding: 18px 24px; border-radius: 8px 8px 0 0; font-weight: bold; font-size: 1.2rem; display: flex; align-items: center; justify-content: space-between; }
        .order-section { background: #fff; border-radius: 0 0 12px 12px; box-shadow: 0 2px 8px rgba(38,49,89,0.08); padding: 32px; }
        .order-table th { width: 140px; color: #888; border: none; }
        .order-table td { border: none; }
        .order-table { margin-bottom: 0; }
        .order-status { color: #27ae60; font-weight: 600; }
        .penerima-section { background: #f4f6fb; border-radius: 8px; padding: 18px; margin-bottom: 18px; }
        .bukti-section img { max-width: 100%; border-radius: 8px; }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/dashboard') ?>"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-th"></i> Kategori Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/products') ?>"><i class="fa fa-box"></i> Produk</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#"><i class="fa fa-shopping-cart"></i> Pesanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-ticket-alt"></i> Kupon</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/invoice') ?>"><i class="fa fa-credit-card"></i> Pembayaran</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-users"></i> Pelanggan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-star"></i> Review Pelanggan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-envelope"></i> Kontak</a></li>
                </ul>
            </div>
        </nav>
        <!-- Main Content -->
        <main class="col-md-10 ml-sm-auto px-0">
            <div class="header">
                <span class="font-weight-bold" style="font-size:1.2rem;">Order <?= $order['nomor'] ?></span>
                <div class="admin-info">
                    <i class="fa fa-user-circle"></i> Admin
                </div>
            </div>
            <div class="main-content">
                <div class="order-header">
                    Data Produk
                    <span class="order-status">Status berhasil diperbarui</span>
                </div>
                <div class="order-section row">
                    <div class="col-md-7">
                        <table class="order-table">
                            <tr><th>Nomor</th><td><?= $order['nomor'] ?></td></tr>
                            <tr><th>Tanggal</th><td><?= $order['tanggal'] ?></td></tr>
                            <tr><th>Item</th><td><?= $order['item'] ?></td></tr>
                            <tr><th>Harga</th><td>Rp <?= number_format($order['harga'], 0, ',', '.') ?></td></tr>
                            <tr><th>Metode pembayaran</th><td><?= $order['metode'] ?></td></tr>
                            <tr><th>Status</th><td><?= $order['status'] ?></td></tr>
                        </table>
                        <div class="mt-3">Barang dalam pesanan</div>
                    </div>
                    <div class="col-md-5">
                        <div class="penerima-section mb-3">
                            <div class="font-weight-bold mb-2">Data Penerima</div>
                            <table class="order-table">
                                <tr><th>Nama</th><td><?= $penerima['nama'] ?></td></tr>
                                <tr><th>No. HP</th><td><?= $penerima['no_hp'] ?></td></tr>
                                <tr><th>Alamat</th><td><?= $penerima['alamat'] ?></td></tr>
                                <tr><th>Catatan</th><td><?= $penerima['catatan'] ?></td></tr>
                            </table>
                        </div>
                        <div class="bukti-section">
                            <div class="font-weight-bold mb-2">Pembayaran</div>
                            <img src="<?= $bukti ?>" alt="Bukti Pembayaran">
                        </div>
                    </div>
                </div>
                <div class="text-right mt-4">
                    <a href="<?= site_url('admin/invoice') ?>" class="btn btn-primary">OK</a>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html> 