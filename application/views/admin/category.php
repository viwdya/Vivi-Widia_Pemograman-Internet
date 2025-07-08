<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kategori Produk</title>
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
        .category-header { background: #3b5998; color: #fff; padding: 24px 32px 16px 32px; border-radius: 12px 12px 0 0; display: flex; align-items: center; justify-content: space-between; }
        .category-header h3 { margin: 0; font-weight: 700; font-size: 1.5rem; }
        .category-header .btn-tambah { background: #3baf4a; color: #fff; font-weight: 600; border-radius: 6px; padding: 8px 20px; border: none; }
        .category-header .btn-tambah:hover { background: #2e8b3c; }
        .category-list { background: #fff; border-radius: 0 0 12px 12px; padding: 32px; box-shadow: 0 2px 8px rgba(38,49,89,0.08); }
        .table th, .table td { vertical-align: middle !important; }
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
                    <li class="nav-item"><a class="nav-link active" href="<?= site_url('admin/category') ?>"><i class="fa fa-th"></i> Kategori Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/products') ?>"><i class="fa fa-box"></i> Produk</a></li>
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
                <span class="font-weight-bold" style="font-size:1.2rem;">Kelola Kategori Produk</span>
                <div class="admin-info">
                    <i class="fa fa-user-circle"></i> Admin
                </div>
            </div>
            <div class="main-content">
                <div class="category-header">
                    <h3>Kelola Kategori Produk</h3>
                    <button class="btn btn-tambah">Tambah</button>
                </div>
                <div class="category-list mt-0">
                    <table class="table table-bordered table-hover mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>ID Kategori</th>
                                <th>Nama Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($kategori)): foreach ($kategori as $k): ?>
                                <tr>
                                    <td><?= $k->id_kategori ?></td>
                                    <td><?= $k->nama_kategori ?></td>
                                </tr>
                            <?php endforeach; else: ?>
                                <tr><td colspan="2" class="text-center">Belum ada kategori.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html> 