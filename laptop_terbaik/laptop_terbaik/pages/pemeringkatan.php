<?php
include_once __DIR__ . '/../koneksi.php';

$query = $koneksi->query("SELECT `COL 6` as merk FROM data_laptop");

$frekuensi = [];
$merk_asli = [];

while ($row = $query->fetch_assoc()) {
    $merk_raw = trim($row['merk']);
    $merk = strtolower($merk_raw);  

    if ($merk === 'merk laptop' || $merk === '') continue;

    if (!isset($frekuensi[$merk])) {
        $frekuensi[$merk] = 1;
        $merk_asli[$merk] = $merk_raw; 
    } else {
        $frekuensi[$merk]++;
    }
}

arsort($frekuensi);
?>

<h2>PEMERINGKATAN MERK LAPTOP TERBANYAK</h2>

<style>
    .table thead.table-dark th {
        background-color: #0a2647 !important;
        color: #fff !important;
    }
</style>

<div class="table-responsive" style="height: 100%;">
<table id="tabelMerk" class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>Rank</th>
            <th>Merk Laptop</th>
            <th>Jumlah Kemunculan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $rank = 1;
        foreach ($frekuensi as $merk => $jumlah) {
            $nama_merk = htmlspecialchars($merk_asli[$merk]);
            echo "<tr>
                    <td>{$rank}</td>
                    <td>{$nama_merk}</td>
                    <td>{$jumlah}</td>
                </tr>";
            $rank++;
        }
        ?>
    </tbody>
</table>
</div>

<script>
    $(document).ready(function() {
        $('#tabelMerk').DataTable({
            scrollY: '60vh',
            scrollCollapse: true,
            paging: true,
            pageLength: 100,
            lengthMenu: [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
            language: {
                search: "Search:",
                lengthMenu: "Show _MENU_ entries",
                info: "Showing _START_ to _END_ of _TOTAL_ entries"
            }
        });
    });
</script>
