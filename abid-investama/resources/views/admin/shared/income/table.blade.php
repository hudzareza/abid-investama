<h1 class="mt-4">Income Report</h1>
<div class="card mb-4">
    <div class="card-header">
        CASUAL INCOME
    </div>
    <div class="card-body">
        <table id="example" class="datatable-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Nama Lokasi</th>
                    <th>Periode</th>
                    <th>Nama Pelapor</th>
                    <th>In</th>
                    <th>Out</th>
                    <th>Total</th>
                    <th>Tanggal Lapor</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($casual as $itemCasual)
            <?php
            if ($itemCasual->bulan == '1') {
                $bulan = "Januari";
            } elseif ($itemCasual->bulan == '2') {
                $bulan = "Februari";
            } elseif ($itemCasual->bulan == '3') {
                $bulan = "Maret";
            } elseif ($itemCasual->bulan == '4') {
                $bulan = "April";
            } elseif ($itemCasual->bulan == '5') {
                $bulan = "Mei";
            } elseif ($itemCasual->bulan == '6') {
                $bulan = "Juni";
            } elseif ($itemCasual->bulan == '7') {
                $bulan = "Juli";
            } elseif ($itemCasual->bulan == '8') {
                $bulan = "Agustus";
            } elseif ($itemCasual->bulan == '9') {
                $bulan = "September";
            } elseif ($itemCasual->bulan == '10') {
                $bulan = "Oktober";
            } elseif ($itemCasual->bulan == '11') {
                $bulan = "November";
            } elseif ($itemCasual->bulan == '12') {
                $bulan = "Desember";
            }
            ?>
            <tr>
                <td>{{ ++$loop->index }}</td>
                <td>{{ $itemCasual->nama_lokasi }}</td>
                <td>{{ $bulan }} {{$itemCasual->tahun}}</td>
                <td>{{ $itemCasual->nama }}</td>
                <td>{{ $itemCasual->in }}</td>
                <td>{{ $itemCasual->out }}</td>
                <td>{{ $itemCasual->income }}</td>
                <td>{{ $itemCasual->created_at }}</td>
                <td>
                    <a href="{{ route('location.delete', encrypt($itemCasual->id)) }}" type="submit" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
        <br>
        <p class="mt-4"><b>Casual Income Summary : {{$casualSummary}}</b></p>
    </div>
</div>
<br>
<hr>
<br>
<div class="card mb-4">
    <div class="card-header">
        MEMBER INCOME
    </div>
    <div class="card-body">
        <table id="example" class="datatable-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Nama Lokasi</th>
                    <th>Periode</th>
                    <th>Nama Pelapor</th>
                    <th>Emoney</th>
                    <th>Flazz</th>
                    <th>BRI</th>
                    <th>BNI</th>
                    <th>Qris</th>
                    <th>Total</th>
                    <th>Tanggal Lapor</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($member as $itemMember)
            <?php
            if ($itemMember->bulan == '1') {
                $bulan = "Januari";
            } elseif ($itemMember->bulan == '2') {
                $bulan = "Februari";
            } elseif ($itemMember->bulan == '3') {
                $bulan = "Maret";
            } elseif ($itemMember->bulan == '4') {
                $bulan = "April";
            } elseif ($itemMember->bulan == '5') {
                $bulan = "Mei";
            } elseif ($itemMember->bulan == '6') {
                $bulan = "Juni";
            } elseif ($itemMember->bulan == '7') {
                $bulan = "Juli";
            } elseif ($itemMember->bulan == '8') {
                $bulan = "Agustus";
            } elseif ($itemMember->bulan == '9') {
                $bulan = "September";
            } elseif ($itemMember->bulan == '10') {
                $bulan = "Oktober";
            } elseif ($itemMember->bulan == '11') {
                $bulan = "November";
            } elseif ($itemMember->bulan == '12') {
                $bulan = "Desember";
            }
            ?>
            <tr>
                <td>{{ ++$loop->index }}</td>
                <td>{{ $itemMember->nama_lokasi }}</td>
                <td>{{ $bulan }} {{$itemMember->tahun}}</td>
                <td>{{ $itemMember->nama }}</td>
                <td>{{ $itemMember->emoney }}</td>
                <td>{{ $itemMember->flazz }}</td>
                <td>{{ $itemMember->bri }}</td>
                <td>{{ $itemMember->bni }}</td>
                <td>{{ $itemMember->qris }}</td>
                <td>{{ $itemMember->income }}</td>
                <td>{{ $itemMember->created_at }}</td>
                <td>
                    <a href="{{ route('location.delete', encrypt($itemMember->id)) }}" type="submit" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
        <br>
        <p class="mt-4"><b>Member Income Summary : {{$memberSummary}}</b></p>
    </div>
</div>