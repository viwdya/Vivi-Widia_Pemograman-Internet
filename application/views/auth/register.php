<!DOCTYPE html>
<html>
<head>
    <title>Daftar Akun Toko Alat Kopi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: #757575;
            min-height: 100vh;
        }
        .register-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-card {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.2);
            overflow: hidden;
            width: 900px;
            max-width: 98vw;
            display: flex;
        }
        .register-image {
            width: 350px;
            background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80') center center/cover no-repeat;
        }
        .register-form {
            flex: 1;
            padding: 48px 36px 36px 36px;
        }
        .register-title {
            font-size: 1.7rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 32px;
            letter-spacing: 1px;
        }
        .form-control {
            background: #f7f7f7;
            border-radius: 6px;
        }
        .btn-green {
            background: #4caf50;
            color: #fff;
            font-weight: 500;
            letter-spacing: 1px;
            border: none;
        }
        .btn-green:hover {
            background: #388e3c;
        }
        @media (max-width: 800px) {
            .register-card { flex-direction: column; width: 98vw; }
            .register-image { width: 100%; height: 180px; }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-card">
            <div class="register-image d-none d-md-block"></div>
            <div class="register-form">
                <div class="register-title">BUAT AKUN TOKO ALAT KOPI</div>
                <?php if(isset($error)) echo '<div class="alert alert-danger">'.$error.'</div>'; ?>
                <form method="post" action="<?= site_url('auth/register'); ?>">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="no_hp" class="form-control" placeholder="No. HP" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-green btn-block mt-3">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html> 