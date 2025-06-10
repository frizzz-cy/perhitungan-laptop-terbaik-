<?php
include 'koneksi.php';
include 'sidebar.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'laptop_terbaik';
$pageFile = "pages/$page.php";

if (file_exists($pageFile)) {
    include $pageFile;
}

if (!isset($_GET['page']) || $_GET['page'] == 'laptop_terbaik') {
    echo '
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <img src="assets/img/laptop.jpg" alt="Laptop Terbaik" style="max-width:180px; margin-bottom:24px;">
                <h1 class="mb-3" style="color:#0a2647;">Selamat Datang di Sistem Pemilihan Laptop Terbaik</h1>
                <p class="lead mb-4">
                    Aplikasi ini membantu Anda memilih laptop terbaik berdasarkan kriteria harga, RAM, storage, dan fitur lainnya.<br>
                    Silakan gunakan menu di samping untuk mengelola data laptop, melakukan normalisasi, pemeringkatan, dan melihat hasil perhitungan.
                </p>
                <a href="?page=data_laptop" class="btn btn-primary btn-lg" style="background:#0a2647; border:none;">
                    Mulai Lihat Data Laptop
                </a>
            </div>
        </div>
    </div>
    ';
}
?>