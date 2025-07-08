<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Produk</title>
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
        .produk-header {
            background: #3b5998;
            color: #fff;
            padding: 24px 32px 16px 32px;
            border-radius: 12px 12px 0 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .produk-header h3 {
            margin: 0;
            font-weight: 700;
            font-size: 1.5rem;
        }
        .produk-header .btn-tambah {
            background: #3baf4a;
            color: #fff;
            font-weight: 600;
            border-radius: 6px;
            padding: 8px 20px;
            border: none;
        }
        .produk-header .btn-tambah:hover {
            background: #2e8b3c;
        }
        .produk-list {
            background: #fff;
            border-radius: 0 0 12px 12px;
            padding: 32px;
            box-shadow: 0 2px 8px rgba(38,49,89,0.08);
        }
        .produk-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(38,49,89,0.04);
            margin-bottom: 24px;
            padding: 16px;
            text-align: center;
            background: #fafbfc;
            transition: box-shadow 0.2s;
        }
        .produk-card:hover {
            box-shadow: 0 4px 16px rgba(38,49,89,0.12);
        }
        .produk-card img {
            max-width: 100px;
            max-height: 100px;
            margin-bottom: 12px;
        }
        .produk-card .produk-nama {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 8px;
        }
        .produk-card .produk-harga {
            color: #3b5998;
            font-weight: 600;
            margin-bottom: 8px;
        }
        .produk-card .produk-stok {
            color: #888;
            font-size: 0.95rem;
            margin-bottom: 8px;
        }
        .produk-card .btn-group {
            margin-top: 8px;
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
                    <li class="nav-item"><a class="nav-link active" href="<?= site_url('admin/products') ?>"><i class="fa fa-box"></i> Produk</a></li>
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
                <div class="produk-header">
                    <h3>Kelola Produk</h3>
                    <button class="btn btn-tambah" onclick="window.location.href='<?= site_url('admin/add_product') ?>'">Tambah</button>
                </div>
                <div class="produk-list mt-0">
                    <div class="row">
                        <?php if (!empty($produk)): ?>
                            <?php foreach ($produk as $p): ?>
                                <div class="col-md-3">
                                    <a href="<?= site_url('admin/edit_product/' . $p->id_produk) ?>" style="text-decoration:none;color:inherit">
                                        <div class="produk-card">
                                            <img src="<?= $p->gambar ? base_url($p->gambar) : base_url('assets/img/default.png') ?>" alt="<?= $p->nama_produk ?>">
                                            <div class="produk-nama"><?= $p->nama_produk ?></div>
                                            <div class="produk-stok">Rp <?= number_format($p->harga, 0, ',', '.') ?></div>
                                            <div class="text-muted" style="font-size:0.95rem;">Kategori: <?= $p->nama_kategori ?></div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="col-12"><div class="alert alert-info">Belum ada produk.</div></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html> 