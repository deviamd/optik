@extends('layouts.template')
@section('title')
Laporan
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="card">

                                            <div class="card-header">
                                                <h5>Laporan Table</h5>
                                                <div class="card-header-right">
                                                </div>
                                            </div>
                                            <div class="ml-3">
                                                <!--a class="btn btn-info waves-effect waves-light" href="/laporan/create" role="button"> Create (+)</a>-->
                                                <a href="/laporan/pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                                                <a href="/laporan/export_excel" class="btn btn-success my-3" target="_blank">EXCEL</a>

                                                </p>
                                                </div>

                                            <div class="card-block table-blaporan-style">
                                                <div class="table-responsive">

                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Nama User</th>
                                                                <th>Id Transaksi</th>
                                                                <th>Status</th>
                                                                <th>Tanggal Laporan</th>

                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @foreach($laporan as $row)
                                                            <td>{{ $loop->iteration + ($laporan->perpage() *  ($laporan->currentPage() -1)) }}</td>
                                                            <td>{{ $row->id_[pembayaran]}}</td>
                                                            <td>{{$row->id_transaksi}}</td>
                                                            <td>{{ $row->tanggal}}</td>

                                                            <td>

                                                        </tr>

                                                    </td>


                                                </tr>
                    @endforeach
                                                        </tbody>
                                                        {{ $laporan->appends(Request::all())->links() }}
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
@endsection
