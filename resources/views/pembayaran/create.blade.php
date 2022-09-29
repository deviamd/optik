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
                                        {{-- @include('alert.eror') --}}
                        <h4 class="card-title">Pembayaran</h4>
                        <form class="custom-validation" method="POST" action="{{ route('pembayaran.store') }}" novalidate="">
                            @csrf
                            <div class="mb-3">
                                <label>Tanggal</label>
                                <input type="date" name="tgl_pembayaran" class="form-control" required="" placeholder="Silahkan input nama tanggal pembayaran">
                            </div>
                            <div class="mb-3">
                                <label>Total Bayar</label>
                                <input type="text" name="total_bayar" class="form-control" required="" placeholder="Silahkan input total">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jenis Pembayaran</label>
                                <select name="jenis_pembayaran" class="form-select" aria-label="Default select example">
                                       {{-- @foreach ($pembayaran as $row) --}}
                                       {{-- <option value="{{ $row->id }}">{{ $row->jenis }}</option> --}}
                                       {{-- <option value="{{ $row->id }}">{{ $row->jenis }}</option> --}}
                                       {{-- <option value="{{ $row->id }}">{{ $row->jenis }}</option> --}}
                                       {{-- <option value="COD">COD</option> --}}
                                       <option selected value="COD">COD</option>
                                       <option value="Debit">Debit</option>
                                       {{-- @endforeach --}}
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
