<!DOCTYPE html>
<html lang="id">
    <head>
        <title>E-Library</title>
        <link rel="stylesheet" href="style.css">
        <style>
            .header {
                text-align: center;
                margin-bottom: 60px;
                padding-top: 20px;
            }
            .header h1 {
                color: #0f4c75;
                font-size: 36px;
            }
            .cards {
                display: flex;
                gap: 30px;
                justify-content: center;
            }
            .card {
                background: #ffffff;
                border-radius: 20px;
                padding: 45px 30px;
                text-align: center;
                width: 260px;
                text-decoration: none;
                color: #1b262c;
                box-shadow: 0 10px 30px rgba(0,0,0,0.05);
                transition: 0.4s;
                border-bottom: 6px solid #bbe1fa;
            }
            .card:hover {
                transform: translateY(-15px);
                box-shadow: 0 20px 40px rgba(15, 76, 117, 0.15);
                border-bottom-color: #3282b8;
            }
            .card h3 {
                font-size: 20px;
                margin-bottom: 10px;
                color: #0f4c75;
            }
            .card p {
                font-size: 14px;
                color: #555;
            }
            .icon {
                font-size: 40px;
                margin-bottom: 15px;
                display: block;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <img src="ikoon.webp" alt="Logo" class="logo">
            <h1>E-Library</h1>
            <p>Sistem Perpustakaan Digital</p>
        </div>
        <div class="cards">
            <a href="Member.php" class="card">
                <span class="icon">👤</span>
                <h3>Member</h3>
                <p>Profil keanggotaan</p>
            </a>
            <a href="Buku.php" class="card">
                <span class="icon">📚</span>
                <h3>Buku</h3>
                <p>Koleksi buku</p>
            </a>
            <a href="Peminjaman.php" class="card">
                <span class="icon">📝</span>
                <h3>Peminjaman</h3>
                <p>Pencatatan peminjaman</p>
            </a>
        </div>
    </body>
</html>