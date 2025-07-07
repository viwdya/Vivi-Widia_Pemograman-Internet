<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background: #f4f6fb;
        }
        .sidebar {
            background: #263159;
            min-height: 100vh;
            color: #fff;
            padding-top: 30px;
        }
        .sidebar .nav-link {
            color: #fff;
            font-weight: 500;
            margin-bottom: 10px;
        }
        .sidebar .nav-link.active, .sidebar .nav-link:hover {
            background: #435585;
            border-radius: 8px;
        }
        .sidebar .fa {
            margin-right: 10px;
        }
        .header {
            background: #fff;
            padding: 18px 32px;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header .search-box {
            width: 350px;
        }
        .header .admin-info {
            font-weight: 600;
            color: #263159;
        }
        .main-content {
            padding: 32px 32px 0 32px;
        }
        .dashboard-title {
            font-size: 2rem;
            font-weight: 700;
            color: #263159;
            margin-bottom: 24px;
        }
        .card-stat {
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(38,49,89,0.08);
            margin-bottom: 24px;
        }
        .card-stat .card-body {
            display: flex;
            align-items: center;
        }
        .card-stat .icon {
            font-size: 2.2rem;
            margin-right: 18px;
        }
        .produk { color: #e74c3c; }
        .pelanggan { color: #f1c40f; }
        .pesanan { color: #27ae60; }
        .pendapatan { color: #2980b9; }
        .summary-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(38,49,89,0.08);
            padding: 24px;
            margin-bottom: 24px;
        }
        .summary-title {
            font-weight: 600;
            color: #263159;
            margin-bottom: 12px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link active" href="#"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-th"></i> Kategori Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-box"></i> Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/invoice') ?>"><i class="fa fa-shopping-cart"></i> Pesanan</a></li>
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
                <input type="text" class="form-control search-box" placeholder="Cari...">
                <div class="admin-info">
                    <i class="fa fa-user-circle"></i> Admin
                </div>
            </div>
            <div class="main-content">
                <div class="dashboard-title">Dashboard</div>
                <div class="row">
                    <div class="col-md-3">
                        <a href="<?= site_url('admin/products') ?>" style="text-decoration:none; color:inherit;">
                            <div class="card card-stat">
                                <div class="card-body">
                                    <span class="icon produk"><i class="fa fa-box"></i></span>
                                    <div>
                                        <div class="h4 mb-0">9</div>
                                        <small>Jumlah produk yang tersedia</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stat">
                            <div class="card-body">
                                <span class="icon pelanggan"><i class="fa fa-users"></i></span>
                                <div>
                                    <div class="h4 mb-0">5</div>
                                    <small>Pelanggan yang terdaftar</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stat">
                            <div class="card-body">
                                <span class="icon pesanan"><i class="fa fa-shopping-cart"></i></span>
                                <div>
                                    <div class="h4 mb-0">4</div>
                                    <small>Jumlah pesanan diterima</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stat">
                            <div class="card-body">
                                <span class="icon pendapatan"><i class="fa fa-wallet"></i></span>
                                <div>
                                    <div class="h4 mb-0">Rp 127.985,00</div>
                                    <small>Total pendapatan</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="summary-card">
                            <div class="summary-title">RINGKASAN Penjualan</div>
                            <div style="height:180px; background:#e9ecef; border-radius:8px;"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="summary-card">
                            <div class="summary-title">RINGKASAN Pendapatan</div>
                            <div style="height:180px; background:#e9ecef; border-radius:8px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html> 