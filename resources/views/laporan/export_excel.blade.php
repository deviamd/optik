<table>
    <thead>
        <tr>
            <th>Id Laporan</th>
            <th>Nama User</th>
            <th>Id Transaksi</th>
            <th>Total</th>
            <th>Tanggal Laporan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($laporan as $row)
        <tr>
        <td>{{$row->id_lap}}</td>
        <td>{{ $row->user->name}}</td>
        <td>{{ $row->transaksi->total}}</td>
        <td>{{ $row->tanggal}}</td>
        </tr>
        @endforeach
    </tbody>
</table>>
