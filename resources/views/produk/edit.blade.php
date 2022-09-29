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
                <h4 class="card-title">Edit Produk</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('produk.update',[$produk->id_produk]) }}" novalidate="">
                                            @csrf
                                            {{ method_field('PUT') }}


                                            <div class="mb-3">
                                                <label>Nama</label>
                                                <input type="text" name="nama" class="form-control" required="" value="{{ $produk->name }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Harga</label>
                                                <input type="text" name="jenis" class="form-control" required="" value="{{ $produk->jenis }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Stok</label>
                                                <input type="text" name="stok" class="form-control" required="" value="{{ $produk->name }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nama Product</label>
                                                <select name="product_id" class="form-select" aria-label="Default select example">
                                                       @foreach ($product as $product)
                                                       <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                       @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                       Edit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    </div> <!-- container-fluid -->
    </div> <!-- page-content -->
    </div> <!-- main-content -->
@endsection
