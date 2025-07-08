<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Order Customer</title>
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
        .order-header {
            background: #3b5998;
            color: #fff;
            padding: 24px 32px 16px 32px;
            border-radius: 12px 12px 0 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .order-header h3 {
            margin: 0;
            font-weight: 700;
            font-size: 1.5rem;
        }
        .order-list {
            background: #fff;
            border-radius: 0 0 12px 12px;
            padding: 32px;
            box-shadow: 0 2px 8px rgba(38,49,89,0.08);
        }
        .table th, .table td {
            vertical-align: middle !important;
        }
        .status-selesai { color: #27ae60; font-weight: 600; }
        .status-batal { color: #e74c3c; font-weight: 600; }
        .status-proses { color: #f1c40f; font-weight: 600; }
        .footer {
            text-align: right;
            color: #888;
            font-size: 0.95rem;
            margin-top: 24px;
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
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/dashboard') ?>"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/category') ?>"><i class="fa fa-th"></i> Kategori Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/products') ?>"><i class="fa fa-box"></i> Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i> Pesanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-ticket-alt"></i> Kupon</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#"><i class="fa fa-credit-card"></i> Pembayaran</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-users"></i> Pelanggan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-star"></i> Review Pelanggan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-envelope"></i> Kontak</a></li>
                </ul>
            </div>
        </nav>
        <!-- Main Content -->
        <main class="col-md-10 ml-sm-auto px-0">
            <div class="header">
                <span class="font-weight-bold" style="font-size:1.2rem;">Kelola Order Customer</span>
                <div class="admin-info">
                    <i class="fa fa-user-circle"></i> Admin
                </div>
            </div>
            <div class="main-content">
                <div class="order-header">
                    <h3>Kelola Order Customer</h3>
                </div>
                <div class="order-list mt-0">
                    <table class="table table-bordered table-hover mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Customer</th>
                                <th>Tanggal</th>
                                <th>Jumlah Item</th>
                                <th>Jumlah Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($orders)): ?>
                                <?php foreach ($orders as $order): ?>
                                    <tr>
                                        <td><a href="<?= site_url('admin/order_detail/' . $order->id_pesanan) ?>">#<?= str_pad($order->id_pesanan, 12, '0', STR_PAD_LEFT) ?></a></td>
                                        <td><?= $order->nama_pelanggan ?></td>
                                        <td><?= date('l, d F Y H:i', strtotime($order->tanggal_pesanan)) ?></td>
                                        <td>-</td>
                                        <td>Rp <?= number_format($order->total, 0, ',', '.') ?></td>
                                        <td class="status-<?= $order->status ?>">
                                            <?= ucfirst($order->status) ?>
                                        </td>
                                        <td><a href="<?= site_url('admin/order_process/' . $order->id_pesanan) ?>" title="Proses Pembayaran"><i class="fa fa-credit-card"></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr><td colspan="7" class="text-center">Belum ada pesanan.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <div class="footer">
                        &copy; 2024 Toko Alat Kopi
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html> 