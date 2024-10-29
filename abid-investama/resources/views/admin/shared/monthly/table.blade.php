<h1 class="mt-4">List Monthly Budget</h1>
<div class="card mb-4">
    <div class="card-header">
        <button id="export">Ekspor ke Excel</button>
    </div>
    <div class="card-body">
        <table id="example" class="datatable-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Nama Lokasi</th>
                    <th>Nama Permintaan</th>
                    <th>Nama</th>
                    <th>Bagian</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Stock</th>
                    <th>FPB</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($monthly as $item)
            <?php
            if ($item->bulan == '1') {
                $bulan = "Januari";
            } elseif ($item->bulan == '2') {
                $bulan = "Februari";
            } elseif ($item->bulan == '3') {
                $bulan = "Maret";
            } elseif ($item->bulan == '4') {
                $bulan = "April";
            } elseif ($item->bulan == '5') {
                $bulan = "Mei";
            } elseif ($item->bulan == '6') {
                $bulan = "Juni";
            } elseif ($item->bulan == '7') {
                $bulan = "Juli";
            } elseif ($item->bulan == '8') {
                $bulan = "Agustus";
            } elseif ($item->bulan == '9') {
                $bulan = "September";
            } elseif ($item->bulan == '10') {
                $bulan = "Oktober";
            } elseif ($item->bulan == '11') {
                $bulan = "November";
            } elseif ($item->bulan == '12') {
                $bulan = "Desember";
            }
            ?>
            <tr>
                <td>{{ ++$loop->index }}</td>
                <td>{{ $item->nama_lokasi }}</td>
                <td>{{ $item->permintaan }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->bagian }}</td>
                <td>{{ $item->tanggal }} {{ $bulan }} {{ $item->tahun }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->stock }}</td>
                <td>{{ $item->fpb }}</td>
                <td>
                    <a href="{{ route('location.delete', encrypt($item->id)) }}" type="submit" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>
<script>
    document.getElementById('export').addEventListener('click', function() {
        // Ambil parameter pencarian dan pengurutan
        let searchValue = $('#search-input').val();
        let sortColumn = 'nama_lokasi'; // contoh kolom
        let sortDirection = 'desc'; // atau 'desc'


        // Buat URL untuk ekspor
        let url = `/export-monthly-budget?search=${searchValue}&sort[column]=${sortColumn}&sort[direction]=${sortDirection}`;

        // Arahkan pengguna ke URL untuk mengunduh file Excel
        window.location.href = url;
    });
</script>