<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Konsumen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body { background: #f4f6fb; }
        .sidebar {
            background: #23272b;
            min-height: 100vh;
            color: #fff;
            padding-top: 24px;
        }
        .sidebar .sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 24px;
            text-align: center;
        }
        .sidebar .user-info {
            text-align: center;
            margin-bottom: 24px;
        }
        .sidebar .user-info img {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            margin-bottom: 8px;
        }
        .sidebar .user-info .user-name {
            font-size: 1rem;
            font-weight: 600;
            color: #fff;
        }
        .sidebar .nav-link {
            color: #fff;
            font-weight: 500;
            margin-bottom: 10px;
        }
        .sidebar .nav-link.active, .sidebar .nav-link:hover {
            background: #3578e5;
            border-radius: 8px;
        }
        .sidebar .fa {
            margin-right: 10px;
        }
        .main-content {
            padding: 32px 32px 0 32px;
        }
        .dashboard-title {
            font-size: 2rem;
            font-weight: 700;
            color: #23272b;
            margin-bottom: 24px;
        }
        .card-stat {
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(38,49,89,0.08);
            margin-bottom: 24px;
            color: #fff;
        }
        .card-stat .card-body {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            min-height: 120px;
        }
        .card-order { background: #43b02a; }
        .card-proses { background: #2980b9; }
        .card-bayar { background: #f1c40f; color: #23272b; }
        .card-review { background: #00bcd4; }
        .card-stat .stat-title {
            font-size: 1.1rem;
            font-weight: 600;
        }
        .card-stat .stat-value {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 8px;
        }
        .card-stat .stat-link {
            color: #fff;
            font-size: 0.95rem;
            text-decoration: underline;
            cursor: pointer;
        }
        .card-bayar .stat-link { color: #23272b; }
        .alert-success {
            margin-bottom: 24px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block sidebar">
            <div class="sidebar-title">Toko Alat Kopi</div>
            <div class="user-info">
                <?php $nama = isset($_SESSION['pelanggan']->nama) ? $_SESSION['pelanggan']->nama : 'Pelanggan'; ?>
                <img src="https://ui-avatars.com/api/?name=<?= urlencode($nama) ?>&background=3578e5&color=fff" alt="User">
                <div class="user-name"><?= $nama ?></div>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link active" href="#"><i class="fa fa-home"></i> Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('customer/cart') ?>"><i class="fa fa-shopping-cart"></i> Keranjang</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('customer/order_history') ?>"><i class="fa fa-shopping-bag"></i> Order Saya</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('customer/payment') ?>"><i class="fa fa-credit-card"></i> Pembayaran</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-star"></i> Review</a></li>
            </ul>
        </nav>
        <!-- Main Content -->
        <main class="col-md-10 ml-sm-auto px-0">
            <div class="main-content">
                <div class="dashboard-title">Dashboard</div>
                <div class="alert alert-success">Pendaftaran akun berhasil!</div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-stat card-order">
                            <div class="card-body">
                                <div class="stat-value">0</div>
                                <div class="stat-title">Order</div>
                                <div class="stat-link"><a href="<?= site_url('customer/cart') ?>" style="color:inherit;text-decoration:underline">Lihat Order</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stat card-proses">
                            <div class="card-body">
                                <div class="stat-value">0</div>
                                <div class="stat-title">Order dalam proses</div>
                                <div class="stat-link">Lihat Order</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stat card-bayar">
                            <div class="card-body">
                                <div class="stat-value">0</div>
                                <div class="stat-title">Pembayaran</div>
                                <div class="stat-link">Lihat Pembayaran</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stat card-review">
                            <div class="card-body">
                                <div class="stat-value">0</div>
                                <div class="stat-title">Review</div>
                                <div class="stat-link">Lihat Review</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Produk Grid -->
            <div class="row mt-4">
                <?php if (!empty($produk)): ?>
                    <?php foreach ($produk as $p): ?>
                        <div class="col-6 col-md-3 mb-3">
                            <div class="card h-100 shadow-sm p-2" style="min-height:210px;">
                                <a href="<?= site_url('customer/product_detail/' . $p->id_produk) ?>" style="text-decoration:none;color:inherit">
                                    <img src="<?= (strpos($p->gambar, 'http') === 0 ? $p->gambar : base_url($p->gambar)) ?>" class="card-img-top mx-auto d-block" alt="<?= $p->nama_produk ?>" style="height:100px;width:100px;object-fit:cover;margin-bottom:10px;">
                                    <div class="card-body p-2 text-center">
                                        <h6 class="card-title mb-1" style="font-size:0.95rem;min-height:36px;"> <?= $p->nama_produk ?> </h6>
                                        <div class="card-text font-weight-bold mb-1" style="font-size:0.95rem;">Rp <?= number_format($p->harga, 0, ',', '.') ?></div>
                                        <div class="text-muted" style="font-size:0.85rem;">Kategori: <?= $p->id_kategori ?></div>
                                        <span class="btn btn-outline-primary btn-sm py-0 px-2" style="font-size:0.85rem;">Lihat Detail</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12"><div class="alert alert-info">Belum ada produk.</div></div>
                <?php endif; ?>
            </div>
        </main>
    </div>
</div>
</body>
</html> 