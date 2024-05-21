<?php
    include "service/database.php";

    if(isset($_POST['send'])) {
        $username = $_POST['username'];
        $yourtext = $_POST['yourtext'];

        $sql = "INSERT INTO reviews (username, review) VALUES 
        ('$username', '$yourtext')";

        if($db->query($sql)) {
                echo "Thank For The Review :)"; 
        }else {
            echo "Ooops Something Worng, We Can't Get Your Review :(";
        }
    }

?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="icon" href="%PUBLIC_URL/favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>WEB PRIBADI</title>
        <link rel="stylesheet" href="style.css">
        <style>
            /* CSS untuk mempercantik form REVIEW */
            .review-form {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 10px;
                background-color: #f9f9f9;
            }
            .review-form input, .review-form textarea {
                width: calc(100% - 22px); /* Mengurangi padding dan border */
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
            }
            .review-form button {
                width: 100%;
                padding: 10px;
                border: none;
                border-radius: 5px;
                background-color: #007BFF;
                color: white;
                font-size: 16px;
                cursor: pointer;
            }
            .review-form button:hover {
                background-color: #0056b3;
            }
            /* CSS untuk mempercantik card BLOG */
            .card {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 20px;
                padding: 20px;
                background-color: #f9f9f9;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                margin: 20px 0;
            }
            .card-item {
                background: white;
                border: 1px solid #ccc;
                border-radius: 10px;
                padding: 20px;
                width: 100%;
                max-width: 600px;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                transition: transform 0.3s, box-shadow 0.3s;
            }
            .card-item:hover {
                transform: translateY(-10px);
                box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            }
            .card-title {
                font-size: 20px;
                font-weight: bold;
                margin-bottom: 10px;
                cursor: pointer;
                color: #007BFF;
                text-decoration: none;
            }
            .card-title:hover {
                text-decoration: underline;
            }
            .card-desc {
                font-size: 16px;
                color: #333;
            }
            /* CSS untuk mempercantik galeri */
            .gallery-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 20px;
                justify-content: center;
                align-items: center;
                padding: 20px;
                background-color: #f9f9f9;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }
            .gallery-item {
                position: relative;
                overflow: hidden;
                border-radius: 10px;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                transition: transform 0.3s, box-shadow 0.3s;
            }
            .gallery-item:hover {
                transform: scale(1.05);
                box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            }
            .gallery-item img {
                width: 100%;
                height: auto;
                display: block;
            }
            .gallery-item .caption {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                padding: 10px;
                background: rgba(0, 0, 0, 0.6);
                color: white;
                text-align: center;
                font-size: 16px;
                display: none;
            }
            .gallery-item:hover .caption {
                display: block;
            }
        </style>
    </head>
    <body>
        <header>
            <h1 href="#" class="logo">ODYSIUS</h1>
            <nav>
                <ul>
                    <!-- fitur dibawah belum digunakan -->
                    <!-- <li>
                        <a href="#">TENTANG</a>
                    </li> -->
                    <li>
                        <a href="#blog">BLOG</a>
                    </li>
                    <li>
                        <a href="https://linktr.ee/lordyparihala">CONTACT</a>
                    </li>
                    <li>
                        <a href="#review">REVIEW</a>
                    </li>
                </ul>
            </nav>
            <button class="btn-cta" onclick="window.location.href='https://www.instagram.com/lordyparihala_/'">FOLLOW ME</button>
        </header>
        <div class="container">
            <div class="intro">
                <p class="title">HELLO, LORDY HERE!</p>
                <p class="description">WELCOME TO MY PERSONAL PAGE</p>
                <img src="assets/foto/Foto Pribadi_Lordy Lawrence Parihala.jpg" alt="Foto Pribadi_Lordy Lawrence Parihala" class="img-foto"/>
            </div>
        </div>
        <div class="parallax">
            <div class="tentang">
                <p class="title">SAYA SEORANG MAHASISWA TEKNIK INFORMATIKA</p>
                <p class="description">UNIVERSITAS SAM RATULANGI MANADO</p>
                <div class="mt-10">
                    <button class="btn-cta" onclick="window.location.href='https://github.com/lordyparihala26/project01HTML.github.io'">MARI KERJA SAMA</button>
                </div>
            </div>
            <div class="container">
                <div class="gallery-container">
                    <div class="gallery-item">
                        <img src="assets/foto/Foto Profil.jpg" alt="Foto Profil" />
                        <div class="caption">Raise Your Voice Blue Choir Event 2023</div>
                    </div>
                    <div class="gallery-item">
                        <img src="assets/foto/WhatsApp Image 2024-03-25 at 13.47.52_f2a6423a.jpg" alt="WhatsApp Image" />
                        <div class="caption">Awardee Beasiswa Bakti BCA 2024</div>
                    </div>
                    <div class="gallery-item">
                        <img src="assets/foto/Foto Pribadi_Lordy Lawrence Parihala.jpg" alt="Foto Pribadi" />
                        <div class="caption">Almamater UNSRAT</div>
                    </div>
                </div>
                <div class="card" id="blog">
                    <div class="card-item">
                        <a class="card-title" href="https://www.cnnindonesia.com/internasional/20240423095746-120-1089316/seberapa-besar-kekuatan-senjata-nuklir-iran">
                            Seberapa Besar Kekuatan Nuklir Iran</a>
                        <p class="card-desc">Fasilitas nuklir Iran menjadi sorotan usai Israel melancarkan serangannya pada Jumat (19/4) malam.</p>
                    </div>
                    <div class="card-item">
                        <a class="card-title" href="https://www.cnnindonesia.com/teknologi/20240418161630-199-1087732/ahli-temukan-lubang-hitam-kedua-terbesar-bima-sakti-33-kali-matahari">
                            Ahli Temukan Lubang Hitam Kedua Terbesar Bima Sakti, 33 kali Matahari</a>
                        <p class="card-desc">Para astronom berhasil menemukan lubang hitam raksasa berukuran 33 kali massa lebih besar dari Matahari dan dekat dengan Bumi.</p>
                    </div>
                    <div class="card-item">
                        <a class="card-title" href="https://www.cnnindonesia.com/nasional/20240521103059-32-1100264/dpr-panggil-nadiem-soal-lonjakan-ukt-kami-minta-penjelasan">
                            DPR Panggil Nadiem soal Lonjakan UKT: Kami Minta Penjelasan</a>
                        <p class="card-desc">Ketua Komisi X DPR RI Syaiful Huda memanggil Mendikbud Nadiem Makarim dalam rapat kerja bersama hari ini. Komisi X akan meminta penjelasan Nadiem terkait Uang Kuliah Tunggal (UKT) di sejumlah perguruan tinggi negeri (PTN) yang melonjak drastis.</p>
                    </div>
                </div>
                <h3 id="review">DIRECT REVIEW</h3>
                <form class="review-form" action="index.php" method="POST">
                    <input type="text" placeholder="Name" name="username"/>
                    <textarea placeholder="Your review..." name="yourtext"></textarea>
                    <button type="submit" name="send">Send</button>
                </form>
            </div>
        </div>
        <footer>
            <p class="title">&copy; Lordy Parihala Website 2024</p>
        </footer>
    </body>
</html>
