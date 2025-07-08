<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembayaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .payment-header { background: #29a3ef; color: #fff; padding: 18px 24px; border-radius: 8px 8px 0 0; font-weight: bold; font-size: 1.2rem; }
        .payment-form label { font-weight: 500; }
        .payment-form .form-group { margin-bottom: 1rem; }
        .payment-sidebar { background: #eaf6fd; border-radius: 8px; padding: 18px; }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div class="payment-header">Data Pembayaran</div>
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
</body>
</html> 