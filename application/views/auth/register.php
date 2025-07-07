<!DOCTYPE html>
<html>
<head>
    <title>Daftar Akun Toko Alat Kopi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: #757575;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-wrapper {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.2);
            display: flex;
            max-width: 900px;
            width: 100%;
            overflow: hidden;
        }
        .register-image {
            width: 350px;
            background: #eee;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .register-form {
            flex: 1;
            padding: 40px 40px 32px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .register-title {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 32px;
            letter-spacing: 1px;
        }
        .form-row {
            display: flex;
            gap: 16px;
        }
        .form-group {
            flex: 1;
        }
        .btn-green {
            background: #4cd137;
            color: #fff;
            font-weight: 600;
            border: none;
            width: 120px;
        }
        .btn-green:hover {
            background: #44bd32;
        }
        @media (max-width: 800px) {
            .register-wrapper {
                flex-direction: column;
                max-width: 98vw;
            }
            .register-image {
                width: 100%;
                height: 180px;
            }
        }
    </style>
</head>
<body>
    <div class="register-wrapper">
        <div class="register-image">
            <img src="<?= base_url('assets/img/coffeeshop.jpeg') ?>" alt="Toko Alat Kopi">
        </div>
        <div class="register-form">
            <div class="register-title">BUAT AKUN TOKO ALAT KOPI</div>
            <?php if(isset($error)): ?>
                <div class="alert alert-danger py-2"><?= $error ?></div>
            <?php endif; ?>
            <form method="post" action="<?= site_url('auth/register'); ?>">
                <div class="form-row mb-3">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-row mb-3">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-row mb-3">
                    <div class="form-group">
                        <input type="text" name="no_hp" class="form-control" placeholder="No. HP" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                    </div>
                </div>
                <div class="form-group text-center mt-4">
                    <button type="submit" class="btn btn-green">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html> 