@extends('layouts.home')
@section('title')
Produk
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
                        <h4 class="card-title">Produk</h4>
                        <form class="custom-validation" method="POST" action="{{ route('kategori.store') }}" novalidate="">
                            @csrf
                            <div class="mb-3">
                                <label>Id Produk</label>
                                <input type="text" name="id_produk" class="form-control" required="" placeholder="Silahkan input id produk">
                            </div>
                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="nama_produk" class="form-control" required="" placeholder="Silahkan input nama produk">
                            </div>
                            <div class="mb-3">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control" required="" placeholder="Silahkan input harga">
                            </div>
                            <div class="mb-3">
                                <label>Stok</label>
                                <input type="text" name="stok" class="form-control" required="" placeholder="Silahkan input stok">
                            </div>
                            <div class="mb-3">
                                <label>Id_kategori</label>
                                <input type="text" name="id_kategori" class="form-control" required="" placeholder="Silahkan input id kategori">
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
