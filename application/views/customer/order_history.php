<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Saya</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .order-header { background: #3578e5; color: #fff; padding: 18px 24px; border-radius: 8px 8px 0 0; font-weight: bold; font-size: 1.2rem; }
        .order-table th, .order-table td { vertical-align: middle; }
        .order-table th { background: #eaf1fb; }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="order-header">Order Saya</div>
    <table class="table order-table mt-0">
        <thead>
            <tr>
                <th>No.</th>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Jumlah Pesanan</th>
                <th>Total Pesanan</th>
                <th>Pembayaran</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($orders)): ?>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?= $order['no'] ?></td>
                        <td><?= $order['id'] ?></td>
                        <td><?= $order['tanggal'] ?></td>
                        <td><?= $order['jumlah_pesanan'] ?></td>
                        <td>Rp <?= number_format($order['total'], 0, ',', '.') ?></td>
                        <td><?= $order['pembayaran'] ?></td>
                        <td><?= $order['status'] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="7" class="text-center">Belum ada riwayat order</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
    <div class="mt-4">
        <a href="<?= site_url('customer/dashboard') ?>" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali ke Dashboard</a>
    </div>
</div>
</body>
</html> 