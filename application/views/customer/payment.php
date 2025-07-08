<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembayaran</title>
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
        .payment-header { background: #29a3ef; color: #fff; padding: 18px 24px; border-radius: 8px 8px 0 0; font-weight: bold; font-size: 1.2rem; }
        .payment-form label { font-weight: 500; }
        .payment-form .form-group { margin-bottom: 1rem; }
        .payment-sidebar { background: #eaf6fd; border-radius: 8px; padding: 18px; }
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
                <li class="nav-item"><a class="nav-link" href="<?= site_url('customer/dashboard') ?>"><i class="fa fa-home"></i> Dasbor</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('customer/cart') ?>"><i class="fa fa-shopping-cart"></i> Keranjang</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('customer/order_history') ?>"><i class="fa fa-shopping-bag"></i> Order Saya</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= site_url('customer/payment') ?>"><i class="fa fa-credit-card"></i> Pembayaran</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-star"></i> Review</a></li>
            </ul>
        </nav>
        <!-- Main Content -->
        <main class="col-md-10 ml-sm-auto px-0">
            <div class="main-content">
                <div class="payment-header">Data Pembayaran</div>
                <div class="row">
                    <div class="col-md-8">
                        <form class="payment-form p-4 border border-top-0 rounded-bottom" enctype="multipart/form-data" method="post" action="#">
                            <div class="form-group">
                                <label>Order:</label>
                                <select class="form-control" name="order_id">
                                    <?php foreach ($orders as $order): ?>
                                        <option value="<?= $order['id'] ?>"><?= $order['id'] ?> (Rp <?= number_format($order['total'], 0, ',', '.') ?>)</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nama bank:</label>
                                    <input type="text" class="form-control" name="nama_bank" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>No. Rekening:</label>
                                    <input type="text" class="form-control" name="no_rekening" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Jumlah Transfer:</label>
                                    <input type="number" class="form-control" name="jumlah_transfer" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Atas nama:</label>
                                    <input type="text" class="form-control" name="atas_nama" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Transfer ke:</label>
                                <select class="form-control" name="bank_tujuan">
                                    <?php foreach ($bank_tujuan as $bank): ?>
                                        <option value="<?= $bank['no_rek'] ?>"><?= $bank['nama'] ?> (<?= $bank['no_rek'] ?>)</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Bukti pembayaran:</label>
                                <input type="file" class="form-control-file" name="bukti_pembayaran" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Konfirmasi</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="payment-sidebar">
                            <div class="mb-2"><b>Pembayaran saya</b></div>
                            <div class="alert alert-info">Belum ada data pembayaran.</div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="<?= site_url('customer/dashboard') ?>" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali ke Dashboard</a>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html> 