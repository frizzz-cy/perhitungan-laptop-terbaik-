<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
    <h2 style="margin: 0;">RANKING MERK LAPTOP BERDASARKAN SKOR SAW</h2>
    <button onclick="cetakHasilSAW()" class="btn-cetak">Simpan / Cetak Hasil</button>
</div>

<style>
    .table thead.table-dark th {
        background-color: #0a2647 !important;
        color: #fff !important;
    }

    .btn-cetak {
        padding: 10px 25px;
        font-size: 14px;
        background-color: #0a2647;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-cetak:hover {
        background-color: #08365d;
    }

    .table-responsive {
        height: 100%;
    }
</style>

<div class="table-responsive">
    <table id="tabelSAW" class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Merk Laptop</th>
                <th>Rata-rata Skor SAW</th>
                <th>Jumlah Data</th>
                <th>Ranking</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once __DIR__ . '/../koneksi.php';

            $query = $koneksi->query("SELECT `COL 6` as merk, `COL 7` as harga, `COL 8` as ram, `COL 9` as storage FROM data_laptop");

            $data = [];
            while ($row = $query->fetch_assoc()) {
                $merk = trim(strtolower($row['merk']));
                if ($merk == 'merk laptop' || empty($merk)) continue;

                $harga   = floatval(preg_replace('/[^0-9.]/', '', $row['harga']));
                $ram     = floatval(preg_replace('/[^0-9.]/', '', $row['ram']));
                $storage = floatval(preg_replace('/[^0-9.]/', '', $row['storage']));

                $data[] = [
                    'merk'    => $row['merk'],
                    'harga'   => $harga,
                    'ram'     => $ram,
                    'storage' => $storage
                ];
            }

            if (count($data) > 0) {
                $min_harga   = min(array_column($data, 'harga'));
                $max_ram     = max(array_column($data, 'ram'));
                $max_storage = max(array_column($data, 'storage'));

                $bobot = [
                    'harga'   => 0.4,
                    'ram'     => 0.3,
                    'storage' => 0.3
                ];

                foreach ($data as &$d) {
                    $d['skor'] =
                        ($min_harga / $d['harga']) * $bobot['harga'] +
                        ($d['ram'] / $max_ram) * $bobot['ram'] +
                        ($d['storage'] / $max_storage) * $bobot['storage'];
                }
                unset($d);

                $grouped = [];
                foreach ($data as $d) {
                    $merk = $d['merk'];
                    if (!isset($grouped[$merk])) {
                        $grouped[$merk] = ['total_skor' => 0, 'jumlah' => 0];
                    }
                    $grouped[$merk]['total_skor'] += $d['skor'];
                    $grouped[$merk]['jumlah']++;
                }

                $ranking = [];
                foreach ($grouped as $merk => $info) {
                    $avg = $info['total_skor'] / $info['jumlah'];
                    $ranking[] = [
                        'merk' => $merk,
                        'rata_skor' => $avg,
                        'jumlah' => $info['jumlah']
                    ];
                }

                usort($ranking, fn($a, $b) => $b['rata_skor'] <=> $a['rata_skor']);

                $no = 1;
                foreach ($ranking as $r) {
                    echo "<tr>
                        <td>{$no}</td>
                        <td>" . htmlspecialchars($r['merk']) . "</td>
                        <td>" . number_format($r['rata_skor'], 4) . "</td>
                        <td>{$r['jumlah']}</td>
                        <td>{$no}</td>
                    </tr>";
                    $no++;
                }
            }
            ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
        $('#tabelSAW').DataTable({
            scrollY: '60vh',
            scrollCollapse: true,
            paging: true,
            pageLength: 100,
            lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            language: {
                search: "Search:",
                lengthMenu: "Show _MENU_ entries",
                info: "Showing _START_ to _END_ of _TOTAL_ entries"
            }
        });
    });

    function cetakHasilSAW() {
        const tabel = document.getElementById("tabelSAW");
        if (!tabel) {
            alert("Tabel hasil tidak ditemukan!");
            return;
        }

        const newWin = window.open('', '', 'width=900,height=600');
        newWin.document.write('<html><head><title>Cetak Hasil SAW</title>');
        newWin.document.write('<style>');
        newWin.document.write('body { font-family: Arial, sans-serif; padding: 20px; }');
        newWin.document.write('table { border-collapse: collapse; width: 100%; }');
        newWin.document.write('th, td { border: 1px solid #000; padding: 8px; text-align: center; }');
        newWin.document.write('th { background-color: #0a2647; color: white; }');
        newWin.document.write('</style>');
        newWin.document.write('</head><body>');
        newWin.document.write('<h2 style="text-align: center;">Ranking Merk Laptop Berdasarkan Skor SAW</h2>');
        newWin.document.write(tabel.outerHTML);
        newWin.document.write('</body></html>');
        newWin.document.close();
        newWin.focus();
        newWin.print();
        newWin.close();
    }
</script>
