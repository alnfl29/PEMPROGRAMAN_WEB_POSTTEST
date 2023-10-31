<?php
// Tentukan zona waktu
date_default_timezone_set('Asia/Jakarta');

// informasi tanggal dan waktu
$hari = date('l');  
$tanggal = date('d');  
$bulan = date('F');  
$tahun = date('Y');  
$jam = date('H:i:s');  
$zonaWaktu = date('T'); 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Toko Sepatu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <style>


        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 5;
            }
        }

        body {
            animation: fadeIn 1s ease-in-out;
        }

        /* Animasi Hover pada Produk */
        .product {
            transform: scale(1);
            transition: transform 0.3s ease-in-out;
        }

        .product:hover {
            transform: scale(1.05);
        }

        /* Animasi Slide-in untuk Tentang Saya */
        @keyframes slideInFromLeft {
            from {
                transform: translateX(-100%);
            }

            to {
                transform: translateX(0);
            }
        }

        #about-me {
            animation: slideInFromLeft 1s ease-in-out;
        }

        /* CSS untuk styling website */
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url(toko.jpeg);
            background-size: cover; /* Gambar akan menutupi seluruh area elemen */
            background-position: center center; /* Pusat gambar di tengah-tengah elemen */
            background-repeat: no-repeat; /* Menghindari pengulangan gambar */
            background-attachment: fixed; /* Gambar tetap pada posisinya saat pengguna menggulir halaman */
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 3em 0;
            background-image: url(toko.jpeg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            /* Menambahkan posisi relatif agar pseudo-element bekerja */
        }

        /* Menambahkan efek gradient ke header dengan pseudo-element */
        header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            /* Overlay hitam transparan */
            z-index: 1;
            /* Pastikan overlay berada di atas gambar tetapi di bawah teks */
        }

        header h1 {
            margin: 0;
            font-size: 2em;
            font-weight: 800;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            z-index: 2;
            position: relative;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
        }

        header h1:first-child {
            margin-bottom: 0.1em;
            font-size: 3em;
            color: #FFD700;
            margin: 350px;
        }


        nav {
            background: linear-gradient(to right, #252525, #0b206c);
            /* Linear gradient background */
            overflow: hidden;
            box-shadow: 0 100px 100px rgba(86, 85, 85, 0.918);
            /* Shadow effect */
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 15px 30px;
            font-size: large;
            text-decoration: none;
            transition: background-color 0.3s;
            /* Transition effect */
        }

        nav a:hover {
            background-color: rgba(12, 44, 223, 0.914);
            /* Slight white overlay on hover */
        }

        main {
            padding: 50px;
            background: #2e2e2e;
            color: #333;
            margin: 50px 5%;
            /* Center the main content */
            border-radius: 5px;
            box-shadow: 0 0 100px rgb(102, 0, 255);
            /* Subtle shadow for depth */
        }

        footer {
            background-color: #272626;
            color: white;
            text-align: center;
            padding: 3em 0;
            margin-top: 20px;
        }

        main,
        section {
            margin-bottom: 40px;
        }

        h2 {
            color: #e9e9e9;
            font-size: xx-large;
            background-color: #080808;
            position: sticky;
            padding: 20px;
        }

        #home,
        #about-me {
            display: none;
        }

        #home.active,
        #about-me.active {
            display: block;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .product {
            border: 15px solid #000000;
            padding: 10px;
            border-radius: 5px;
            background-color: #f9f9f9;
            transition: background-color 0.3s;
        }

        .product:hover {
            background-color: #777777;
        }

        .product img {
            width: 100%;
            height: 525px;
            margin-bottom: 20px;
            border-radius: 5px;
            object-fit: cover;
        }

        .product-info h3 {
            margin-top: 0;
            font-size: x-large;
        }

        .product-info p {
            margin-bottom: 10px;
            font-size: large;

        }

        .product-price {
            color: #000000;
            font-size: xx-large;
            font-family: cursive;
            font-weight: bold;
        }

        #about-me {
            display: flex;
            font-family: 'Courier', sans-serif;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 30px;
            margin: 50px;
            text-align: left;
            background: linear-gradient(to right, #62c9bf, #e76fc1, #74e3d8);
            color: #0c0c0c;
            font-weight: bold;
            box-shadow: 0 0 100px rgb(4, 0, 255);
            /* Subtle shadow for depth */
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .description-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .description-container h2 {
            font-size: 38px;
            margin-bottom: 20px;
            color: #007BFF;
            background-color: #232323;
        }

        .description-container p {
            font-size: 27px;
            line-height: 1.8;
            font-weight: 600;
            color: #363636;
        }

        .profile-container {
            display: flex;
            gap: 30px;
            align-items: center;
            flex-direction: column;
        }

        .profile-container img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-info {
            flex-grow: 1;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-info h1 {
            font-size: 38px;
            margin-bottom: 30px;
            color: #ffffff;
            background-color: #0056b3;
        }

        .profile-info ul {
            list-style-type: none;
            padding: 0;
        }

        .profile-info li {
            font-size: 25px;
            margin-bottom: 15px;
            color: #666;
            display: flex;
            align-items: center;
        }

        .profile-info i {
            margin-right: 10px;
            color: #007BFF;
            /* Blue color for icons */
        }

        .profile-info a {
            color: #007BFF;
            /* Blue color for links */
            text-decoration: none;
        }

        .profile-info a:hover {
            text-decoration: underline;
        }

        
        .dark-mode {
            background-color: #1a1a1a;
            color: #ffffff;
        }

        .dark-mode header {
            background-color: #222;
            color: #fff;
        }

        .dark-mode nav {
            background: linear-gradient(to right, #111, #000);
        }

        .dark-mode nav a {
            color: #fff;
        }

        .dark-mode .product {
            background-color: #333;
            border: 15px solid #000;
            color: #fff;
        }

        .dark-mode .product:hover {
            background-color: #0c0c0c;
        }

        .dark-mode .product-price {
            color: #fff;
        }

        .dark-mode #about-me {
            background: linear-gradient(to right, #111, #000, #222);
            color: #fff;
            box-shadow: 0 0 100px rgb(102, 0, 255);
        }

        .dark-mode .container {
            background-color: #000;
            color: #fff;
            box-shadow: 0 0 100px rgb(102, 0, 255);
        }

        .dark-mode .description-container {
            background-color: #000;
            color: #fff;

        }

        .dark-mode .description-container p {
            background-color: #000;
            color: #fff;
        }

        .dark-mode .profile-info {
            flex-grow: 1;
            background-color: #272727;
            color: #fff;
            padding: 20px;
            margin: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .dark-mode .profile-info h1 {
            font-size: 34px;
            background-color: #0b206c;
            margin-bottom: 20px;
            color: #ebebeb;
        }

        .dark-mode .profile-info li {
            font-size: 18px;
            margin-bottom: 15px;
            color: #ffffff;
            font-size: 20px;
            display: flex;
            align-items: center;
        }

        .dark-mode .profile-info i {
            margin-right: 10px;
            color: #fbfbfb;
            /* Blue color for icons */
        }

        .dark-mode .profile-info a {
            color: #fcfeff;
            /* Blue color for links */
            text-decoration: none;
        }

        .dark-mode .profile-info a:hover {
            text-decoration: underline;
        }

        /* Reset CSS untuk body dan HTML */
        html, body {
            height: 100%;
            margin: 0 auto;
            justify-content: center;
            text-align: center;
            padding: 0;
        }

        /* Menerapkan Flexbox untuk body */
        #centered-content {
            display: flex;
            justify-content: center;
            /* Menengahkan secara horizontal */
            align-items: center;
            /* Menengahkan secara vertikal */
            min-height: 100vh;
            /* Set tinggi minimum untuk mengisi seluruh tampilan */
        }

        /* Gaya tombol */
        #exit-btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #exit-btn:hover {
            background-color: #0056b3;
        }


        /* CSS untuk elemen pop-up konfirmasi */
        #exit-popup {
            display: none;
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            font-size: large;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }

        #exit-popup .popup-content {
            background-color: #3d3d3d;
            padding: 200px;
            /* Ubah nilai padding untuk memperbesar konten */
            font-size: x-large;
            color: #e9e9e9;
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            position: relative;
            max-width: 400px;
            /* Lebar konten maksimum yang Anda inginkan */
            margin: 0 auto;
            /* Membuat konten berada di tengah */
            font-size: 24px;
            /* Menyesuaikan ukuran font sesuai kebutuhan Anda */
        }

        #exit-popup button {
            margin: 20px;
            padding: 30px 50px;
            /* Ubah nilai padding untuk memperbesar tombol */
            font-size: x-large;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #exit-popup button:hover {
            background-color: #0056b3;
        }

        /* CSS untuk tombol "Keluar dari Website" yang lebih besar */
        #exit-btn {
            font-size: 18px;
            /* Ukuran font */
            padding: 10px 20px;
            /* Padding tombol */
        }

        /* CSS untuk tombol "Keluar dari Website" yang lebih besar */
        #exit-btn {
            font-size: 48px;
            /* Ukuran font */
            padding: 10px 20px;
            /* Padding tombol */
        }

     /* Styling dasar */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Styling untuk container */
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            box-shadow: 0 10px 150px rgb(121, 77, 202);
            background: linear-gradient(45deg, #ffffff, #f1f1f1);
            border-radius: 15px;
            border-top: 6px solid #007BFF;
            overflow: hidden;
        }

        /* Styling untuk judul bagian */
        h2 {
            font-family: 'roboto', sans-serif;
            font-size: x-large;
            text-align: center;
            margin-bottom: 40px;
            color: #007BFF;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Styling untuk form */
        #contact-form .form-group {
            margin-bottom: 30px;
        }

        #contact-form label {
            display: block;
            font-size: 20px;
            font-weight: 900px;
            margin-bottom: 12px;
            color: #555;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        #contact-form input[type="text"],
        #contact-form input[type="email"],
        #contact-form input[type="tel"],
        #contact-form textarea {
            width: 100%;
            padding: 14px;
            border: 2px solid #007BFF;
            border-radius: 6px;
            font-size: 20px;
            background: rgba(255, 255, 255, 0.9);
            transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s;
        }

        #contact-form input[type="text"]:focus,
        #contact-form input[type="email"]:focus,
        #contact-form input[type="tel"]:focus,
        #contact-form textarea:focus {
            border-color: #0056b3;
            box-shadow: 0 0 15px rgba(0, 123, 255, 0.5);
            outline: none;
            transform: scale(1.02);
        }

        #contact-form button {
            display: block;
            width: 100%;
            padding: 14px;
            background: linear-gradient(45deg, #007BFF, #0056b3);
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        #contact-form button:hover {
            background: linear-gradient(45deg, #0056b3, #004099);
            transform: translateY(-2px);
        }

        /* Styling untuk hasil inputan */
        #form-results ul {
            list-style-type: none;
            padding: 0;
        }

        #form-results li {
            margin-bottom: 20px;
            font-size: 20px;
            color: #555;
            border-bottom: 1px dashed #ccc;
            padding-bottom: 10px;
        }

        #form-results span {
            font-weight: bold;
            color: #007BFF;
        }

        /* Dark Mode Styling */

        body.dark-mode{
           
            background: linear-gradient(45deg, #000000, #282828);
            box-shadow: 100px 100px 100px 100px rgb(102, 0, 255);
            margin: 0;
            padding: 0;
        }

        body.dark-mode #contact-form input[type="text"],
        body.dark-mode #contact-form input[type="email"],
        body.dark-mode #contact-form input[type="tel"],
        body.dark-mode #contact-form textarea,
        body.dark-mode #contact-form button {
            background-color: #ffffff;
            font-size: 30px;
            color: #e0e0e0;
            border-color: #555;
        }

        body.dark-mode .container {
            background: linear-gradient(45deg, #2a2a2a, #1b1b1b);
            border-top-color: #f6f0f0;
            color: #565656;
        }

        body.dark-mode #contact-form label {
            display: block;
            font-size: 25px;
            font-weight: 900px;
            margin-bottom: 12px;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 1px;
        }


        body.dark-mode h2 {
            color: #e0e0e0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        body.dark-mode #contact-form textarea {
            color: #000;
        }

        body.dark-mode #contact-form button {
            background: linear-gradient(45deg, #555, #444);
        }

        body.dark-mode #contact-form button:hover {
            background: linear-gradient(45deg, #9a03e6, #6300e4);
        }

       
        body.dark-mode #form-results ul {
            list-style-type: none;
            padding: 0;
        }

        body.dark-mode #form-results li {
            margin-bottom: 20px;
            font-size: 25px;
            color: #fffbfb;
            border-bottom: 1px dashed #ccc;
            padding-bottom: 10px;
        }

        body.dark-mode #form-results span {
            font-weight: bold;
            color: #ffffff;
        }


        .btn-sepatu {
            display: inline-block;
            padding: 15px 30px; /* Membuat padding lebih besar untuk ukuran tombol yang lebih besar */
            background-color: #7f00ff;
            color: #ffffff; /* Warna teks putih */
            text-decoration: none; /* Menghilangkan garis bawah dari tautan */
            border-radius: 25px; /* Membuat sudut tombol melengkung */
            font-size: 30px; /* Ukuran font yang lebih besar */
            font-weight: bold; /* Teks tebal */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan untuk efek "mengangkat" */
            transition: background-color 0.3s, transform 0.3s; /* Efek transisi saat di-hover */
        }

        .btn-sepatu:hover {
            background-color: #e76fc1; /* Warna latar belakang biru yang lebih gelap saat di-hover */
            transform: scale(1.05); /* Membuat tombol sedikit membesar saat di-hover */
        }

        /* Gaya tombol untuk mode gelap */
        .dark-mode .btn-sepatu {
            background-color: #1f1f1f; /* Warna latar belakang abu-abu gelap untuk mode gelap */
            color: #ffffff; /* Warna teks putih */
            box-shadow: 0 5px 15px rgba(255, 255, 255, 0.1); /* Bayangan putih transparan untuk efek "mengangkat" pada mode gelap */
        }

        .dark-mode .btn-sepatu:hover {
            background-color: #333; /* Warna latar belakang abu-abu yang sedikit lebih terang saat di-hover pada mode gelap */
        }


        body .date-info {
            font-family: 'Courier New';
            background-color: #000;
            margin: 0;
            padding: 0;
            display: flex;           /* Mengaktifkan flexbox */
            justify-content: center; /* Menyelaraskan elemen anak di tengah secara horizontal */
            align-items: center;     /* Menyelaraskan elemen anak di tengah secara vertikal */
            height: 8vh;           
        }
        
        .date-info {
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            color: #fff;
            width: 1835px;
        }

        .date-info p {
            margin: 20px 10px;
            font-size: 30px;
        }

        .date-info p:not(:first-child):not(:last-child) {
            margin: 0px 55px;
        }

        span {
            font-weight: bold;
            color: #FFD700; /* Warna emas */
        }


    </style>
</head>

<body>

    <!-- Header -->
    <header>
        
        <h1><i class="fa-solid fa-shoe-prints"></i> Selamat Datang Di Toko Sepatu Matrix <i
                class="fa-solid fa-shoe-prints"></i></h1>

    </header>


    <!-- Tampilkan informasi tanggal dan waktu -->
    <div class="date-info">
        <p>Hari: <span id="hari"></span></p>
        <p>Tanggal: <span id="tanggal"></span></p>
        <p>Bulan: <span id="bulan"></span></p>
        <p>Tahun: <span id="tahun"></span></p>
        <p>Jam: <span id="jam"></span></p>
        <p>Zona Waktu: <span id="zonaWaktu"></span></p>
    </div>
   
        
   <!-- Navbar -->
   <nav class="navbar">
        <a href="#" data-target="home"><i class="fa-solid fa-shop"></i> Home/Beranda </a>
        <a href="#" data-target="about-me"><i class="fa-solid fa-address-card"></i> About Me/Tentang Saya </a>
        <a href="#" id="dark-mode-btn"><i class="fa-solid fa-play"></i> Dark Mode</a>
        <a href="#" id="light-mode-btn"><i class="fa-solid fa-stop"></i> Light Mode</a>
    </nav>


    <a href="regis.php" class="btn-sepatu">Registration <i class="fa-solid fa-cart-shopping"></i></a>
    <a href="form.php" class="btn-sepatu">Login <i class="fa-solid fa-cart-shopping"></i></a>


    <!-- Main Content -->
    <main id="home" class="active">
        <h2>Produk Terbaru</h2>
        <div class="products-grid">
            <!-- Product 1 -->
            <div class="product">
                <img src="sepatu/Sepatu_1.jpeg" alt="Sepatu 1">
                <div class="product-info">
                    <h3>Sepatu Santai 1</h3>
                    <p>Sepatu Nike, salah satu merek sepatu paling ikonik di dunia, menawarkan kombinasi sempurna antara
                        inovasi, kualitas, dan gaya.</p>
                    <p class="product-price">Harga: Rp. 500.000</p>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product">
                <img src="sepatu/Sepatu_2.jpeg" alt="Sepatu 2">
                <div class="product-info">
                    <h3>Sepatu Santai 2</h3>
                    <p>Sepatu Adidas, merek global yang telah lama berdiri, adalah simbol keunggulan dalam dunia
                        olahraga dan mode. </p>
                    <p class="product-price">Harga: Rp. 620.000</p>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product">
                <img src="sepatu/Sepatu_3.jpeg" alt="Sepatu 3">
                <div class="product-info">
                    <h3>Sepatu Santai 3</h3>
                    <p>Sepatu Puma adalah perpaduan sempurna antara inovasi dan gaya. Sebagai salah satu merek olahraga
                        paling ikonik di dunia. </p>
                    <p class="product-price">Harga: Rp. 680.000</p>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product">
                <img src="sepatu/Sepatu_4.jpeg" alt="Sepatu 4">
                <div class="product-info">
                    <h3>Sepatu Olahraga 1</h3>
                    <p>Hipzo Original Produk Kebanggaan anak bangsa dengan Kualitas International Model dan design
                        Elegan dan Kekinian. Bahan Pilihan, Kualitas terjaga .</p>
                    <p class="product-price">Harga: Rp. 150.000</p>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product">
                <img src="sepatu/Sepatu_5.jpeg" alt="Sepatu 5">
                <div class="product-info">
                    <h3>Sepatu Olahraga 2</h3>
                    <p>Dibuat dengan teknologi terdepan, setiap pasang sepatu Nike dirancang untuk memberikan kenyamanan
                        maksimal, dukungan, dan daya tahan yang luar biasa. </p>
                    <p class="product-price">Harga: Rp. 700.000</p>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="product">
                <img src="sepatu/Sepatu_6.jpeg" alt="Sepatu 6">
                <div class="product-info">
                    <h3>Sepatu Olahraga 3</h3>
                    <p>Menggabungkan estetika modern dengan teknologi canggih, Adidas menghadirkan sepatu yang tidak
                        hanya fungsional tetapi juga penuh gaya..</p>
                    <p class="product-price">Harga: Rp. 300.000</p>
                </div>
            </div>

            <!-- Product 7 -->
            <div class="product">
                <img src="sepatu/Sepatu_7.jpeg" alt="Sepatu 7">
                <div class="product-info">
                    <h3>Sepatu Air Jordan 1</h3>
                    <p>Sepatu Nike Air Jordan 1 Mid Smoke Original., 100% Authentic.</p>
                    <p class="product-price">Harga: Rp. 4.000.000</p>
                </div>
            </div>

            <!-- Product 8 -->
            <div class="product">
                <img src="sepatu/Sepatu_8.jpeg" alt="Sepatu 8">
                <div class="product-info">
                    <h3>Sepatu Air Jordan 2</h3>
                    <p>Sepatu Nike Air Jordan 1 Mid Smoke Original., 100% Authentic.</p>
                    <p class="product-price">Harga: Rp. 4.300.000</p>
                </div>
            </div>

            <!-- Product 9 -->
            <div class="product">
                <img src="sepatu/Sepatu_9.jpeg" alt="Sepatu 9">
                <div class="product-info">
                    <h3>Sepatu Air Jordan 3</h3>
                    <p>Sepatu Nike Air Jordan 1 Mid Smoke Original., 100% Authentic.</p>
                    <p class="product-price">Harga: Rp. 3.600.000</p>
                </div>
            </div>

            <!-- Product 10 -->
            <div class="product">
                <img src="sepatu/Sepatu_10.jpeg" alt="Sepatu 10">
                <div class="product-info">
                    <h3>Sepatu Converse 1</h3>
                    <p>Desain modern dan kekinian dengan bahan berkualitas tinggi.</p>
                    <p class="product-price">Harga: Rp. 600.000</p>
                </div>
            </div>

            <!-- Product 11 -->
            <div class="product">
                <img src="sepatu/Sepatu_11.jpeg" alt="Sepatu 11">
                <div class="product-info">
                    <h3>Sepatu Converse 2</h3>
                    <p>Desain modern dan kekinian dengan bahan berkualitas tinggi.</p>
                    <p class="product-price">Harga: Rp. 700.000</p>
                </div>
            </div>

            <!-- Product 12 -->
            <div class="product">
                <img src="sepatu/Sepatu_12.jpeg" alt="Sepatu 12">
                <div class="product-info">
                    <h3>Sepatu Converse 3</h3>
                    <p>Desain modern dan kekinian dengan bahan berkualitas tinggi.</p>
                    <p class="product-price">Harga: Rp. 750.000</p>
                </div>
            </div>

            <!-- Product 13 -->
            <div class="product">
                <img src="sepatu/Sepatu_13.jpeg" alt="Sepatu 13">
                <div class="product-info">
                    <h3>Sepatu Fila</h3>
                    <p>Sepatu Fila Putih/Hitam Wanita Fashion Model Korea High Boots Sneakers Sport Berkualitas Premium
                        .</p>
                    <p class="product-price">Harga: Rp. 600.000</p>
                </div>
            </div>

            <!-- Product 14 -->
            <div class="product">
                <img src="sepatu/Sepatu_14.jpeg" alt="Sepatu 14">
                <div class="product-info">
                    <h3>Sepatu Pantofel</h3>
                    <p>Sepatu pantofel ini banyak digunakan pria ketika akan berpenampilan formal seperti bekerja,
                        meeting atau menghadiri undangan.</p>
                    <p class="product-price">Harga: Rp. 800.000</p>
                </div>
            </div>

            <!-- Product 15 -->
            <div class="product">
                <img src="sepatu/Sepatu_15.jpeg" alt="Sepatu 15">
                <div class="product-info">
                    <h3>Sepatu Futsal</h3>
                    <p>Sepatu Futsal Adidas X Speedportal.4 IN Team Shock Pink White Core Black GZ2451.</p>
                    <p class="product-price">Harga: Rp. 1.400.000</p>
                </div>
            </div>
            <!-- Repeat for other products as needed -->
        </div>
    </main>

    <section id="about-me">
        <div class="container">
            <div class="description-container">
                <h2> Tentang Saya </h2>
                <p>
                    Halo! Nama saya Alif Naufal Fachrian. Saya lahir pada 29 Juni 2004. Saat ini, saya adalah mahasiswa
                    dengan NIM 2209106108. Saya memiliki ketertarikan yang luas dalam berbagai bidang dan selalu
                    bersemangat untuk belajar hal baru. Anda dapat menghubungi saya melalui kontak yang telah disediakan
                    atau mengikuti saya di Instagram untuk mendapatkan pembaruan terbaru tentang saya.
                </p>
            </div>
            <div class="profile-container">
                <img src="photo_aboutme.jpeg" alt="Foto Profil Alif Naufal Fachrian">
                <div class="profile-info">
                    <h1> Contact </h1>
                    <ul>
                        <li><i class="fa-solid fa-file-signature"></i> Nama : Alif Naufal Fachrian</li>
                        <li><i class="fa-solid fa-code"></i> NIM : 2209106108</li>
                        <li><i class="fa-regular fa-calendar-days"></i> Tanggal Lahir: 29 Juni 2004</li>
                        <li><i class="fa-solid fa-phone"></i> No Telepon: 082331******</li>
                        <li><i class="fa-brands fa-instagram"></i> Instagram: <a href="https://instagram.com/alnfl29"
                                target="_blank">@alnfl29</a></li>
                        <li><i class="fa-solid fa-at"></i> Email: aliffbatasa29@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Inputan -->
<section id="contact-form">
    <div class="container">
        <h2>Form Kontak</h2>
        <form id="user-input-form">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">No Telepon:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="message">Pesan dan Kesan:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit">Kirim</button>
        </form>
    </div>
</section>

<!-- Hasil Inputan Form -->
<section id="form-results">
    <div class="container">
        <h2>Hasil Inputan</h2>
        <ul>
            <li>Nama: <span id="result-name"></span></li>
            <li>Email: <span id="result-email"></span></li>
            <li>No Telepon: <span id="result-phone"></span></li>
            <li>Pesan dan Kesan: <span id="result-message"></span></li>
        </ul>
    </div>
</section>


 <!-- Tombol untuk keluar dari website -->
 <button id="exit-btn">Keluar dari Website</button>

 <!-- Pop-up konfirmasi -->
 <div id="exit-popup" class="popup">
     <div class="popup-content">
         <h2>Keluar dari Website</h2>
         <p>Apakah Anda yakin ingin keluar dari website ini?</p>
         <button id="confirm-exit">Ya</button>
         <button id="cancel-exit">Tidak</button>
     </div>
 </div>


    <!-- Footer -->
    <footer>
        PT MATRIX &copy; 2023 Toko Sepatu
    </footer>



    <script>

        // Fungsi untuk mengaktifkan Dark Mode
        function enableDarkMode() {
            document.body.classList.add('dark-mode');
        }

        // Fungsi untuk mengganti mode saat tombol Dark Mode diklik
        document.getElementById('dark-mode-btn').addEventListener('click', function (e) {
            e.preventDefault();
            enableDarkMode();
        });

        // Fungsi untuk mengganti mode saat tombol Light Mode diklik
        document.getElementById('light-mode-btn').addEventListener('click', function (e) {
            e.preventDefault();
            enableLightMode();
        });

        // Fungsi untuk mengaktifkan Dark Mode
        function enableDarkMode() {
            document.body.classList.add('dark-mode');

            // Manipulasi DOM: Ubah warna latar belakang dan warna teks pada elemen dengan ID "home"
            const homeElement = document.getElementById('home');
            homeElement.style.backgroundColor = '#222'; // Ganti warna latar belakang
            homeElement.style.color = '#fff'; // Ganti warna teks
        }

        // Fungsi untuk mengaktifkan Light Mode
        function enableLightMode() {
            document.body.classList.remove('dark-mode');

            // Manipulasi DOM: Kembalikan warna latar belakang dan warna teks pada elemen dengan ID "home" ke nilai awal
            const homeElement = document.getElementById('home');
            homeElement.style.backgroundColor = ''; // Reset warna latar belakang
            homeElement.style.color = ''; // Reset warna teks
        }


        // JavaScript untuk menampilkan konten berdasarkan menu yang dipilih
        const navLinks = document.querySelectorAll('nav a');
        navLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('data-target');
                const targetElement = document.getElementById(targetId);
                document.querySelectorAll('main, section').forEach(el => {
                    el.classList.remove('active');
                });
                targetElement.classList.add('active');
            });
        });

        document.getElementById('dark-mode-btn').addEventListener('click', function() {
            document.body.classList.add('dark-mode');
        });

        document.getElementById('light-mode-btn').addEventListener('click', function() {
            document.body.classList.remove('dark-mode');
        });

        // Fungsi untuk membuka pop-up konfirmasi
        document.getElementById('exit-btn').addEventListener('click', function () {
            document.getElementById('exit-popup').style.display = 'block';
        });

        // Fungsi untuk menutup pop-up konfirmasi
        function closeExitPopup() {
            document.getElementById('exit-popup').style.display = 'none';
        }


        // // Fungsi untuk mengeksekusi keluar dari website dengan ke website lain dalam tab baru
        // document.getElementById('confirm-exit').addEventListener('click', function() {
        //     closeExitPopup();
        //     // Membuka URL di tab baru
        //     window.open('https://google.com/', '_blank'); 
        // });


        // Fungsi untuk mengeksekusi penutupan situs web saat diklik
        document.getElementById('confirm-exit').addEventListener('click', function () {
            closeExitPopup();
            // Menutup jendela/tab saat ini
            window.close();
        });


        // Fungsi untuk membatalkan keluar dari website
        document.getElementById('cancel-exit').addEventListener('click', function () {
            closeExitPopup();
        });



        document.getElementById('user-input-form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Mengambil nilai dari setiap field input
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const message = document.getElementById('message').value;

            // Menampilkan hasil inputan ke dalam bagian "Hasil Inputan Form"
            document.getElementById('result-name').textContent = name;
            document.getElementById('result-email').textContent = email;
            document.getElementById('result-phone').textContent = phone;
            document.getElementById('result-message').textContent = message;
        });

        
        
            function updateWaktu() {
                const now = new Date();
                
                const hariArray = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
                const bulanArray = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                
                const hari = hariArray[now.getDay()];
                const tanggal = now.getDate();
                const bulan = bulanArray[now.getMonth()];
                const tahun = now.getFullYear();
                const jam = now.getHours().toString().padStart(2, '0') + ":" + now.getMinutes().toString().padStart(2, '0') + ":" + now.getSeconds().toString().padStart(2, '0');
                const zonaWaktu = Intl.DateTimeFormat().resolvedOptions().timeZone;

                document.getElementById('hari').textContent = hari;
                document.getElementById('tanggal').textContent = tanggal;
                document.getElementById('bulan').textContent = bulan;
                document.getElementById('tahun').textContent = tahun;
                document.getElementById('jam').textContent = jam;
                document.getElementById('zonaWaktu').textContent = zonaWaktu;

                setTimeout(updateWaktu, 1000);
            }

            updateWaktu();



    </script>

</body>

</html>
