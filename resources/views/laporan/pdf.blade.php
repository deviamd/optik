<table border="2">
    <h2>Laporan Transaksi</h2>
    <thead>
        <tr style="cursor: pointer;">
            <th>Id</th>
            <th>Nama Produk</th>
            <th>Id Order</th>
            <th>Jenis Pembayaran</th>
            <th>Tanggal</th>
            <th>Total Bayar</th>

        </tr>
    </thead>
    <tbody>
    @foreach($transaksi as $row)
<tr>
<td>{{ $loop->iteration + ($transaksi->perpage() *  ($transaksi->currentPage() -1)) }}</td>
<td>{{ $row->produk->nama_produk}}</td>
<td>{{ $row->order->id}}</td>
<td>{{ $row->jenis_pmbayaran }}</td>
<td>{{ $row->tanggal}}</td>
<td>{{ $row->total_bayar}}</td>

</tr>
@endforeach
</tbody>
</table>
