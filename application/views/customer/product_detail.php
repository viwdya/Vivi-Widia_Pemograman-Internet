<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body { background: #f4f6fb; }
        .product-detail-container { background: #fff; border-radius: 16px; box-shadow: 0 2px 8px rgba(38,49,89,0.08); padding: 40px 32px; margin-top: 40px; }
        .product-img { width: 320px; height: 320px; object-fit: contain; border-radius: 12px; background: #f9f9f9; }
        .product-title { font-size: 2rem; font-weight: 700; margin-bottom: 12px; }
        .product-rating { color: #f1c40f; font-size: 1.1rem; }
        .product-meta { color: #888; font-size: 1rem; margin-bottom: 8px; }
        .product-price { font-size: 2rem; font-weight: 700; color: #23272b; margin-bottom: 16px; }
        .product-stock { color: #43b02a; font-weight: 600; margin-bottom: 16px; }
        .product-desc { font-size: 1.1rem; color: #444; margin-bottom: 24px; }
        .add-cart-btn { font-size: 1.1rem; font-weight: 600; border-radius: 8px; padding: 10px 32px; }
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
            <div class="product-rating mb-2">
                <?php 
                $rating = isset($produk->rating) ? $produk->rating : 5;
                $rating_count = isset($produk->rating_count) ? $produk->rating_count : 1;
                $sold = isset($produk->sold) ? $produk->sold : 0;
                ?>
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <i class="fa fa-star<?= $i < $rating ? '' : '-o' ?>"></i>
                <?php endfor; ?>
                <span class="product-meta ml-2"> <?= $rating ?> (<?= $rating_count ?> rating) &bull; Terjual <?= $sold ?></span>
            </div>
            <div class="product-price">Rp <?= number_format($produk->harga, 0, ',', '.') ?></div>
            <div class="product-stock">Tersedia <?= $produk->stok ?></div>
            <div class="product-meta mb-2">Kategori: <?= isset($produk->nama_kategori) ? $produk->nama_kategori : (isset($produk->kategori) ? $produk->kategori : '-') ?></div>
            <div class="product-desc mb-3">Deskripsi: <?= isset($produk->deskripsi) ? $produk->deskripsi : '-' ?></div>
            <form method="post" action="#">
                <div class="form-row align-items-center mb-3">
                    <div class="col-auto">
                        <input type="number" name="qty" value="1" min="1" max="<?= $produk->stok ?>" class="form-control" style="width:80px;">
                    </div>
                </div>
                <button type="submit" class="btn btn-dark add-cart-btn"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
            </form>
        </div>
    </div>
</div>
</body>
</html> 