<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background: #757575;
            min-height: 100vh;
        }
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: rgba(30, 30, 30, 0.95);
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.3);
            padding: 32px 32px 24px 32px;
            width: 100%;
            max-width: 400px;
        }
        .login-title {
            color: #fff;
            font-size: 2.2rem;
            text-align: center;
            margin-bottom: 18px;
            font-weight: 400;
        }
        .login-subtitle {
            color: #ffb6c1;
            text-align: center;
            margin-bottom: 24px;
            font-size: 1.2rem;
            letter-spacing: 1px;
        }
        .form-label {
            color: #fff;
            font-size: 0.95rem;
            letter-spacing: 1px;
        }
        .form-control {
            background: #222;
            color: #fff;
            border: 1px solid #444;
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
    <div class="login-container">
        <div class="w-100">
            <div class="login-title mb-2">Login ke Toko Alat Kopi</div>
            <div class="d-flex justify-content-center">
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
    </div>
</body>
</html> 