<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan</title>
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
        .order-header { background: #3b5998; color: #fff; padding: 24px 32px 16px 32px; border-radius: 12px 12px 0 0; display: flex; align-items: center; justify-content: space-between; }
        .order-header h3 { margin: 0; font-weight: 700; font-size: 1.3rem; }
        .order-detail-card { background: #fff; border-radius: 0 0 12px 12px; box-shadow: 0 2px 8px rgba(38,49,89,0.08); padding: 32px; }
        .order-section-title { font-weight: 600; color: #263159; margin-bottom: 18px; font-size: 1.1rem; }
        .order-table td { padding: 6px 12px; border: none; }
        .order-table th { width: 120px; color: #888; border: none; }
        .order-table { margin-bottom: 0; }
        .btn-ok { background: #3b5998; color: #fff; font-weight: 600; border: none; min-width: 80px; }
        .btn-ok:hover { background: #2e4372; }
        .pembayaran-section { margin-top: 24px; }
        .pembayaran-section th, .pembayaran-section td { border: none; }
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
                    <li class="nav-item"><a class="nav-link active" href="<?= site_url('admin/invoice') ?>"><i class="fa fa-shopping-cart"></i> Pesanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-ticket-alt"></i> Kupon</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-credit-card"></i> Pembayaran</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-users"></i> Pelanggan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-star"></i> Review Pelanggan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-envelope"></i> Kontak</a></li>
                </ul>
            </div>
        </nav>
        <!-- Main Content -->
        <main class="col-md-10 ml-sm-auto px-0">
            <div class="header">
                <span class="font-weight-bold" style="font-size:1.2rem;">Order #ASV261020111546</span>
                <div class="admin-info">
                    <i class="fa fa-user-circle"></i> Admin
                </div>
            </div>
            <div class="main-content">
                <div class="order-header">
                    <h3>Data Produk</h3>
                </div>
                <div class="order-detail-card">
                    <div class="row">
                        <div class="col-md-7">
                            <table class="order-table">
                                <tr><th>Nomor</th><td>#ASV261020111546</td></tr>
                                <tr><th>Tanggal</th><td>Senin, 26 November 2020</td></tr>
                                <tr><th>Item</th><td>1</td></tr>
                                <tr><th>Harga</th><td>Rp 60.000,00</td></tr>
                                <tr><th>Metode pembayaran</th><td>Transfer bank</td></tr>
                                <tr><th>Status</th><td>Selesai</td></tr>
                                <tr><th>Catatan</th><td>-</td></tr>
                            </table>
                        </div>
                        <div class="col-md-5">
                            <div class="order-section-title">Data Penerima</div>
                            <table class="order-table">
                                <tr><th>Nama</th><td>Pembeli4</td></tr>
                                <tr><th>No. HP</th><td>087700000000</td></tr>
                                <tr><th>Alamat</th><td>Jl. Merdeka Barat - Jakarta</td></tr>
                                <tr><th>Catatan</th><td>Tolong Dikirim Sesuai Pesanan ya Kak</td></tr>
                            </table>
                            <div class="order-section-title pembayaran-section">Pembayaran</div>
                            <table class="order-table">
                                <tr><th>Transfer</th><td>Rp 60.000,00</td></tr>
                            </table>
                        </div>
                    </div>
                    <div class="text-right mt-4">
                        <button class="btn btn-ok">OK</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html> 