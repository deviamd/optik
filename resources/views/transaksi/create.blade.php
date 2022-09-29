@extends('layouts.home')
@section('title')
TRansaksi
@endsection

<!-- ini untuk isi home -->
@section('content')
<div  id="layoutSidenav_content">
    <main>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                                        {{-- @include('alert.eror') --}}
                        <h4 class="card-title">Transaksi</h4>
                        <form class="custom-validation" method="POST" action="{{ route('transaksi.store') }}" novalidate="">
                            @csrf
                            <div class="mb-3">
                                <label>Id Produk</label>
                                <input type="text" name="id_produk" class="form-control" required="" placeholder="Silahkan input nama tanggal produk">
                            </div>
                            <div class="mb-3">
                                <label>Id Pembayaran</label>
                                <input type="text" name="id_pembayaran" class="form-control" required="" placeholder="Silahkan input total">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">id Transaksi</label>
                                <select name="id_product" class="form-select" aria-label="Default select example">
                                       @foreach ($transaksi as $row)
                                       <option value="{{ $row->id }}">{{ $row->id }}</option>
                                       @endforeach
                                </select>
                            </div>
                            </div>
                            <div class="mb-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Tambah
                                    </button>
                                     <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                     </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div> <!-- container-fluid -->
            </div>
        </div> <!-- page-content -->
    </div> <!-- main-content -->
</div>
@endsection
