@extends('layouts.home')
@section('title')
Order
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
                        <h4 class="card-title">Order</h4>
                        <form class="custom-validation" method="POST" action="{{ route('order.store') }}" novalidate="">
                            @csrf
                            <h2 class="text-center">Tambah Order</h2>
                            <form class="custom-validation" action="{{ route('order.store') }}" method="POST"  novalidate="">
                                @csrf

                                    {{-- <div class="form-row">
                                        <div class="name">Nama</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input type="text" name="nama" class="form-control" required="" placeholder="">
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="form-row">
                                        <div class="name">Qty</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input type="text" name="qty" class="form-control" required="" placeholder="">
                                                <input type="hidden" name="id_user" value="{{ Auth::user()->id }}" class="form-control" required="" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Harga</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input type="text" name="harga" class="form-control" required="" placeholder="">
                                            </div>
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
