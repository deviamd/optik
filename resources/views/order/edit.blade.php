<?php
$tanggal = date("Y-m-d");
?>
@extends('layouts.home')
@section('title')
Pembayaran
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
                <h4 class="card-title">Edit Order</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('pembayaran.update', $pembayaran->id) }}" novalidate="">
                                            @csrf
                                            {{ method_field('PUT') }}


                                            <div class="mb-3">
                                                <label>Nama Produk</label>
                                                <input type="text" name="id" class="form-control" required="" value="{{ $order->produk->nama }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Qty</label>
                                                <input type="text" name="qty" class="form-control" required="" value="{{ $order->qty }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Harga</label>
                                                <input type="text" name="harga" class="form-control" required="" value="{{ $order->harga }}">
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
