<h1 class="mt-4">List Data Member</h1>
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
                    <th>Nama</th>
                    <th>No Polisi</th>
                    <th>Jenis Kendaraan</th>
                    <th>No KWT</th>
                    <th>Mulai</th>
                    <th>Akhir</th>
                    <th>Harga</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($member as $item)
            <tr>
                <td>{{ ++$loop->index }}</td>
                <td>{{ $item->nama_lokasi }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->no_pol }}</td>
                <td>{{ $item->jenis_kendaraan }}</td>
                <td>{{ $item->no_kwt }}</td>
                <td>{{ $item->mulai }}</td>
                <td>{{ $item->akhir }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>
                    <a href="{{ route('location.delete', encrypt($item->id)) }}" type="submit" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>