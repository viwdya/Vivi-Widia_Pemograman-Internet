<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .cart-table th, .cart-table td { vertical-align: middle; }
        .cart-img { width: 60px; height: 60px; object-fit: cover; }
        .cart-header { background: #c6e046; color: #23272b; font-weight: bold; }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Keranjang Belanja</h2>
    <table class="table cart-table">
        <thead class="cart-header">
            <tr>
                <th></th>
                <th>Produk</th>
                <th>Harga</th>
                <th>Kuantitas</th>
                <th>Sub Total</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($cart)): ?>
                <?php foreach ($cart as $item): ?>
                    <tr>
                        <td><img src="<?= $item['gambar'] ?>" class="cart-img" alt="<?= $item['nama_produk'] ?>" /></td>
                        <td><?= $item['nama_produk'] ?></td>
                        <td>Rp <?= number_format($item['harga'], 0, ',', '.') ?></td>
                        <td><?= $item['qty'] ?></td>
                        <td>Rp <?= number_format($item['harga'] * $item['qty'], 0, ',', '.') ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="5" class="text-center">Keranjang kosong</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
    <div class="row mt-4">
        <div class="col-md-6">
            <label>Kode Kupon</label>
            <input type="text" class="form-control" placeholder="Masukkan kode kupon">
        </div>
        <div class="col-md-6 text-right">
            <h5>Rincian Keranjang</h5>
            <!-- Tambahkan rincian total, ongkir, dll jika perlu -->
        </div>
    </div>
    <div class="mt-4">
        <a href="<?= site_url('customer/dashboard') ?>" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali ke Dashboard</a>
    </div>
</div>
</body>
</html> 