<h1 class="mt-4">Schedule</h1>
<div class="card mb-4">
    <div class="card-header">
        DataTable
    </div>
    <div class="card-body">
        <table id="example" class="datatable-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Nama Lokasi</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Bagian</th>
                    <th>Ploting</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($schedule as $item)
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
                <td>{{ $item->nik }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->bagian }}</td>
                <td>{{ $item->ploting }}</td>
                <td>{{ $item->tanggal }} {{ $bulan }} {{ $item->tahun }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>
                    <a href="{{ route('location.delete', encrypt($item->id)) }}" type="submit" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>