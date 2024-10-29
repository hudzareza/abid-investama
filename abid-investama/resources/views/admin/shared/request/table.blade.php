<h1 class="mt-4">list Permintaan</h1>
<div class="card mb-4">
    <div class="card-header">
        DataTable
    </div>
    <div class="card-body">
        <table id="example" class="datatable-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th>Tanggal Buat</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($data as $item)
            <tr>
                <td>{{ ++$loop->index }}</td>
                <td>{{ $item->nama_permintaan }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <a href="{{ route('request.edit', encrypt($item->id)) }}" type="submit" class="btn btn-success btn-sm">Edit</a>
                    <a href="{{ route('request.delete', encrypt($item->id)) }}" type="submit" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>