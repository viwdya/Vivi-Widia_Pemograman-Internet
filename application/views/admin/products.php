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
                        <!-- Contoh produk statis, nanti bisa diganti dengan loop data dari database -->
                        <div class="col-md-3">
                            <a href="<?= site_url('admin/edit_product/1') ?>" style="text-decoration:none; color:inherit;">
                                <div class="produk-card">
                                    <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=200&q=80" alt="Syphon Coffee Maker">
                                    <div class="produk-nama">Syphon Coffee Maker Manual Brew Vacuum Pot</div>
                                    <div class="produk-stok">5 | Rp 288.000,00</div>
                                    <div class="btn-group">
                                        <!-- tombol dihapus sementara -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="<?= site_url('admin/edit_product/2') ?>" style="text-decoration:none; color:inherit;">
                                <div class="produk-card">
                                    <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=200&q=80" alt="Electric Coffee Grinder">
                                    <div class="produk-nama">Electric Coffee Grinder - 600N</div>
                                    <div class="produk-stok">17 | Rp 500.000,00</div>
                                    <div class="btn-group">
                                        <!-- tombol dihapus sementara -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="<?= site_url('admin/edit_product/3') ?>" style="text-decoration:none; color:inherit;">
                                <div class="produk-card">
                                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=200&q=80" alt="Coffee Server">
                                    <div class="produk-nama">coffee server / coffee pot 01 / teko server kopi v60</div>
                                    <div class="produk-stok">18 | Rp 47.800,00</div>
                                    <div class="btn-group">
                                        <!-- tombol dihapus sementara -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="<?= site_url('admin/edit_product/4') ?>" style="text-decoration:none; color:inherit;">
                                <div class="produk-card">
                                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=200&q=80" alt="Vietnam Drip">
                                    <div class="produk-nama">Vietnam Drip Alat Pembuat Kopi Vietnam</div>
                                    <div class="produk-stok">18 | Rp 32.000,00</div>
                                    <div class="btn-group">
                                        <!-- tombol dihapus sementara -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Tambahkan produk lain di sini -->
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html> 