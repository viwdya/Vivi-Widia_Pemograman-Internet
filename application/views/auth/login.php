<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            background: #757575;
            min-height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .login-title {
            color: #fff;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 28px;
            font-weight: 700;
            letter-spacing: 1px;
            text-shadow: 2px 2px 8px #333, 0 1px 0 #fff;
        }
        .login-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
        }
        .login-card {
            background: rgba(30, 30, 30, 0.98);
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.4);
            padding: 40px 36px 32px 36px;
            width: 100%;
            max-width: 420px;
        }
        .login-subtitle {
            color: #ffb6c1;
            text-align: center;
            margin-bottom: 24px;
            font-size: 1.2rem;
            letter-spacing: 1px;
            font-weight: 700;
            text-shadow: 1px 1px 4px #222, 0 1px 0 #fff;
        }
        .form-label {
            color: #fff;
            font-size: 1rem;
            letter-spacing: 1px;
            font-weight: 600;
        }
        .form-control {
            background: #222;
            color: #fff;
            border: 1px solid #444;
        }
        .form-control::placeholder {
            color: #bbb;
            opacity: 1;
        }
        .form-control:focus {
            background: #222;
            color: #fff;
            border-color: #ff4f7a;
            box-shadow: none;
        }
        .input-group-text {
            background: #222;
            color: #ff4f7a;
            border: 1px solid #444;
        }
        .btn-pink {
            background: #ff4f7a;
            color: #fff;
            border: none;
            font-weight: 500;
            letter-spacing: 1px;
            width: 100%;
            margin-top: 10px;
        }
        .btn-pink:hover {
            background: #e13b65;
        }
        .forgot-link, .remember-label {
            color: #fff;
            font-size: 0.95rem;
        }
        .forgot-link:hover {
            color: #ff4f7a;
            text-decoration: underline;
        }
        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #ff4f7a;
            border-color: #ff4f7a;
        }
    </style>
</head>
<body>
    <div class="login-title">Login ke Toko Alat Kopi</div>
    <div class="login-container">
        <div class="w-100 d-flex justify-content-center align-items-center">
            <div class="login-card">
                <div class="login-subtitle">Login Akun</div>
                <?php if($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger py-2"><?= $this->session->flashdata('error'); ?></div>
                <?php endif; ?>
                <form method="post" action="<?= site_url('auth/proses_login'); ?>">
                    <div class="form-group mb-3">
                        <label class="form-label">USERNAME</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label class="form-label">PASSWORD</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="#" class="forgot-link">Lupa password?</a>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ingat" name="ingat">
                            <label class="custom-control-label remember-label" for="ingat">ingat saya</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-pink btn-block">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html> 