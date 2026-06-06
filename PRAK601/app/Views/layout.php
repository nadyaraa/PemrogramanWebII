<!DOCTYPE html>
<html lang="id">
    <head>
        <title><?= $title; ?> | MyPortofolio</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #2d3436;
        }
        .navbar {
            background: rgba(255, 255, 255, 0.1) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        .navbar-brand, .nav-link {
            color: white !important;
            font-weight: 500;
        }
        .nav-link:hover {
            color: #ffd700 !important;
            transform: translateY(-2px);
            transition: 0.3s;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
        }
        .btn-modern {
            background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
            border: none;
            color: white;
            border-radius: 10px;
            padding: 10px 25px;
            font-weight: 600;
        }
        .btn-modern:hover {
            opacity: 0.9;
            color: white;
            box-shadow: 0 5px 15px rgba(37, 117, 252, 0.4);
        }
        .profile-img {
            width: 130px;
            height: 130px;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .badge-skill {
            background: #e0e7ff;
            color: #4338ca;
            padding: 8px 15px;
            border-radius: 50px;
            font-size: 0.8rem;
            margin-right: 5px;
            border: 1px solid #c7d2fe;
        }
        .fade-in {
            animation: fadeIn 0.8s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg sticky-top mb-5">
            <div class="container">
                <a class="navbar-brand" href="#">PRAK601</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/'); ?>"><i class="fas fa-home me-1"></i>Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/profil'); ?>"><i class="fas fa-user me-1"></i>profil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <?= $this->renderSection('content'); ?>
        </div>

        <footer class="text-center mt-5 pb-4 text-white-50">
            <p>&copy; <?= date('Y'); ?> Build with CI4</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>