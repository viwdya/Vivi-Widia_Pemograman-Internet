<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
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
        .form-section {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(38,49,89,0.08);
            padding: 32px 32px 24px 32px;
        }
        .form-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #263159;
            margin-bottom: 24px;
        }
        .form-group label {
            font-weight: 500;
        }
        .btn-primary {
            background: #3b5998;
            border: none;
            font-weight: 600;
        }
        .btn-primary:hover {
            background: #2e4372;
        }
        .foto-section {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(38,49,89,0.08);
            padding: 32px 24px 24px 24px;
            height: 100%;
        }
        .foto-section label {
            font-weight: 500;
        }
        .foto-preview {
            width: 100%;
            text-align: center;
            margin-bottom: 16px;
        }
        .foto-preview img {
            max-width: 120px;
            max-height: 120px;
            border-radius: 8px;
        }
        .foto-opsi {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 10px;
        }
        .foto-opsi span {
            font-size: 0.95rem;
            font-weight: 500;
            color: #3b5998;
            cursor: pointer;
        }
        .foto-opsi span:hover {
            text-decoration: underline;
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
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-th"></i> Kategori Produk</a></li>
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
                <span class="font-weight-bold" style="font-size:1.2rem;">Edit Produk</span>
                <div class="admin-info">
                    <i class="fa fa-user-circle"></i> Admin
                </div>
            </div>
            <div class="main-content">
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-section">
                                <div class="form-title">Data Produk</div>
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control" id="kategori" name="kategori" disabled>
                                        <option value="alat_kopi" selected>Alat Kopi</option>
                                        <option value="perlengkapan_cafe">Perlengkapan Cafe</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama produk</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="Syphon Coffee Maker Manual Brew Vacuum Pot" required readonly>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="harga">Harga</label>
                                        <input type="number" class="form-control" id="harga" name="harga" value="288000" required readonly>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="stok">Stok</label>
                                        <input type="number" class="form-control" id="stok" name="stok" value="5" required readonly>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="satuan">Satuan</label>
                                        <input type="text" class="form-control" id="satuan" name="satuan" value="1" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" readonly>Alat seduh kopi manual dengan sistem vacuum pot.</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="diskon">Diskon</label>
                                    <input type="number" class="form-control" id="diskon" name="diskon" value="0" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="foto-section">
                                <div class="form-title">Foto</div>
                                <div class="foto-preview">
                                    <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=200&q=80" alt="Foto Produk">
                                </div>
                                <div class="foto-opsi">
                                    <span style="color:#3b5998;">Current</span>
                                    <span style="color:#3b5998;">Ganti</span>
                                    <span style="color:#e74c3c;">Hapus</span>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mt-4">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>
</body>
</html> 