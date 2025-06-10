<?php
include_once __DIR__ . '/../koneksi.php';

$query = $koneksi->query("SELECT `COL 6` as merk, `COL 7` as harga, `COL 8` as ram, `COL 9` as storage FROM data_laptop");

$data = [];
while ($row = $query->fetch_assoc()) {
    if (strtolower(trim($row['merk'])) == 'merk laptop') {
        continue;
    }

    $harga = floatval(preg_replace('/[^0-9.]/', '', $row['harga']));
    $ram = floatval(preg_replace('/[^0-9.]/', '', $row['ram']));
    $storage = floatval(preg_replace('/[^0-9.]/', '', $row['storage']));

    $data[] = [
        'merk' => $row['merk'],
        'harga' => $harga,
        'ram' => $ram,
        'storage' => $storage
    ];
}

$harga_values = array_column($data, 'harga');
$ram_values = array_column($data, 'ram');
$storage_values = array_column($data, 'storage');

$min_harga = min($harga_values);
$max_harga = max($harga_values);
$min_ram = min($ram_values);
$max_ram = max($ram_values);
$min_storage = min($storage_values);
$max_storage = max($storage_values);

function normalize($value, $min, $max) {
    if ($max == $min) return 0;
    return ($value - $min) / ($max - $min);
}
?>

<h2 class="mb-4">NORMALISASI DATA LAPTOP</h2>

<style>
    .table thead.table-dark th {
        background-color: #0a2647 !important;
        color: #fff !important;
    }

    .scroll-container {
        overflow-x: auto;
    }
</style>

<div class="scroll-container">
    <table id="tabelNormalisasi" class="table table-bordered table-striped table-hover" style="width: 100%;">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Merk Laptop</th>
                <th>Harga</th>
                <th>(Normalisasi)</th>
                <th>RAM</th>
                <th>(Normalisasi)</th>
                <th>Storage (SSD)</th>
                <th>(Normalisasi)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data as $row) {
                $norm_harga = normalize($row['harga'], $min_harga, $max_harga);
                $norm_ram = normalize($row['ram'], $min_ram, $max_ram);
                $norm_storage = normalize($row['storage'], $min_storage, $max_storage);

                echo "<tr>
                    <td>{$no}</td>
                    <td>" . htmlspecialchars($row['merk']) . "</td>
                    <td>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>
                    <td>" . number_format($norm_harga, 3) . "</td>
                    <td>{$row['ram']} GB</td>
                    <td>" . number_format($norm_ram, 3) . "</td>
                    <td>{$row['storage']} GB</td>
                    <td>" . number_format($norm_storage, 3) . "</td>
                </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#tabelNormalisasi').DataTable({
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
