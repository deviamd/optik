@extends('layouts.home')
@section('title')
Kategori
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
                        <h4 class="card-title">Kategori</h4>
                        <form class="custom-validation" method="POST" action="{{ route('kategori.store') }}" novalidate="">
                            @csrf
                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="nama_kategori" class="form-control" required="" placeholder="Silahkan input nama">
                            </div>
                            <div class="mb-3">
                                <label>Jenis</label>
                                <input type="text" name="jenis_kategori" class="form-control" required="" placeholder="Silahkan input jenis">
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
