<h2>DATA LAPTOP</h2>
<style>
    .table thead.table-dark th {
        background-color: #0a2647 !important;
        color: #fff !important;
    }
</style>
<div class="table-responsive" style="height: 100%;">
<table id="tabelLaptop" class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Merk Laptop</th>
            <th>Harga</th>
            <th>RAM</th>
            <th>Storage (SSD)</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = $koneksi->query("SELECT `COL 6`, `COL 7`, `COL 8`, `COL 9` FROM data_laptop");
        $no = 1;
        while ($row = $query->fetch_assoc()) {
            if (strtolower(trim($row['COL 6'])) == 'merk laptop') {
                continue;
            }

            $id = $no;
            echo "<tr>
                <td>{$no}</td>
                <td>{$row['COL 6']}</td>
                <td>{$row['COL 7']}</td>
                <td>{$row['COL 8']}</td>
                <td>{$row['COL 9']}</td>
                <td class='aksi-col'>
                    <a href='?page=edit_laptop&id={$id}' class='btn btn-sm btn-warning'>Edit</a>
                    <a href='?page=hapus_laptop&id={$id}' class='btn btn-sm btn-danger' onclick=\"return confirm('Yakin ingin hapus data ini?')\">Hapus</a>
                </td>
            </tr>";
            $no++;
        }
        ?>
    </tbody>
</table>
</div>
<script>
    $(document).ready(function() {
        $('#tabelLaptop').DataTable({
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