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
                <h4 class="card-title">Edit Pembayaran</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('pembayaran.update', $pembayaran->id) }}" novalidate="">
                                            @csrf
                                            {{ method_field('PUT') }}


                                            <div class="mb-3">
                                                <label>Total</label>
                                                <input type="text" name="total_bayar" class="form-control" required="" value="{{ $pembayaran->total_bayar }}">
                                            </div>
                                        <input type="hidden" name="tgl_pembayaran" value="{{ $tanggal }}">
                                            <div class="mb-3">
                                                <label>Jenis</label>
                                                <div>
                                                    <input type="text" name="jenis_pembayaran" class="form-control" required="" parsley-type="" value="{{ $pembayaran->jenis_pembayaran}}">
                                                </div>
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
