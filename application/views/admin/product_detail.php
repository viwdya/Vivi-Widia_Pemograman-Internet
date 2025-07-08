<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk (Admin)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body { background: #f4f6fb; }
        .product-detail-container { background: #fff; border-radius: 16px; box-shadow: 0 2px 8px rgba(38,49,89,0.08); padding: 40px 32px; margin-top: 40px; }
        .product-img { width: 320px; height: 320px; object-fit: contain; border-radius: 12px; background: #f9f9f9; }
        .product-title { font-size: 2rem; font-weight: 700; margin-bottom: 12px; }
        .product-meta { color: #888; font-size: 1rem; margin-bottom: 8px; }
        .product-price { font-size: 2rem; font-weight: 700; color: #23272b; margin-bottom: 16px; }
        .product-stock { color: #43b02a; font-weight: 600; margin-bottom: 16px; }
        .product-desc { font-size: 1.1rem; color: #444; margin-bottom: 24px; }
        .back-btn { font-size: 1rem; border-radius: 8px; padding: 8px 24px; }
    </style>
</head>
<body>
<div class="container product-detail-container">
    <div class="row align-items-center">
        <div class="col-md-5 text-center mb-4 mb-md-0">
            <img src="<?= (strpos($produk->gambar, 'http') === 0 ? $produk->gambar : base_url($produk->gambar)) ?>" class="product-img" alt="<?= $produk->nama_produk ?>">
        </div>
        <div class="col-md-7">
            <div class="product-title"><?= $produk->nama_produk ?></div>
            <div class="product-meta mb-2">Kategori: <?= $produk->nama_kategori ?></div>
            <div class="product-price">Rp <?= number_format($produk->harga, 0, ',', '.') ?></div>
            <div class="product-stock">Stok: <?= $produk->stok ?></div>
            <div class="product-desc mb-3">Deskripsi: <?= $produk->deskripsi ?></div>
            <a href="<?= site_url('admin/products') ?>" class="btn btn-secondary back-btn"><i class="fa fa-arrow-left"></i> Kembali ke Daftar Produk</a>
        </div>
    </div>
</div>
</body>
</html> 