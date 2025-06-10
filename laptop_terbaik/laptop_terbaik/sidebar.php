<!DOCTYPE html>
<html>
<head>
    <title>Laptop Terbaik</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #0a2647; /* biru tua */
        }
        .sidebar a {
            color: white;
            padding: 15px;
            display: block;
            text-decoration: none;
            transition: background 0.2s;
        }
        .sidebar a.active, .sidebar a:active, .sidebar a:focus {
            background-color: #205295 !important;
            font-weight: bold;
        }
        .sidebar a:hover {
            background-color: #144272; /* biru tua lebih terang */
        }
        .content {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php $page = isset($_GET['page']) ? $_GET['page'] : 'laptop_terbaik'; ?>
    <div class="sidebar">
        <h4 class="text-white text-center py-3">Laptop Terbaik</h4>
        <a href="?page=data_laptop" class="<?= $page == 'data_laptop' ? 'active' : '' ?>">Data Laptop</a>
        <a href="?page=normalisasi" class="<?= $page == 'normalisasi' ? 'active' : '' ?>">Normalisasi</a>
        <a href="?page=pemeringkatan" class="<?= $page == 'pemeringkatan' ? 'active' : '' ?>">Pemeringkatan</a>
        <a href="?page=hasil_saw" class="<?= $page == 'hasil_saw' ? 'active' : '' ?>">Hasil SAW</a>
    </div>
    <div class="content">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    
</body>
</html>