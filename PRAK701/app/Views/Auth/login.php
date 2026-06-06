<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <style>
            body { 
                background: whitesmoke;
                min-height: 100vh;
                display: flex;
                align-items: center;
            }
            .card {
                border: none;
                border-radius: 15px;
            }
            .brand-logo {
                width: 200px;
                height: auto;
                margin-bottom: 20px;
            }
            .btn-login {
                background-color: #764ba2;
                color: white;
                border: none;
                transition: 0.3s;
            }
            .btn-login:hover {
                background-color: #5a3782;
                color: white;
                box-shadow: 0 4px 15px rgba(118, 75, 162, 0.4);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card shadow-lg p-4">
                        <div class="card-body">
                            <div class="card-body text-center">
                                <div class="mb-2">
                                    <img src="<?= base_url('ikoon.webp') ?>" alt="Logo" class="brand-logo img-fluid">
                                </div>
                                    <h3 class="text-center fw-bold mb-4">MASUK DIGILIB</h3>
                            
                            <?php if(session()->getFlashdata('error')): ?>
                                <div class="alert alert-danger text-center small"><?= session()->getFlashdata('error') ?></div>
                            <?php endif; ?>

                            <form action="/login" method="post" class="text-start">
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control rounded-pill px-3" placeholder="Username Anda">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control rounded-pill px-3" placeholder="********">
                                </div>
                                <button type="submit" class="btn btn-login w-100 rounded-pill fw-bold">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>