@extends('layouts.template')
@section('title')
Pelanggan
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

        <div class="col-xl-8">


                                <div class="card">
<div class="card-body">
                                        <h4 class="card-title">Edit Pelanggan</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('user.update',[$user->id]) }}" novalidate="">
                                            @csrf
                                            {{ method_field('PUT') }}


                                            <div class="mb-3">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" required="" value="{{ $user->name }}">
                                            </div>

                                            <div class="mb-3">
                                                <label>No Hp</label>
                                                <div>
                                                    <input type="no_telp" name="email" class="form-control" required="" parsley-type="no_telp" value="{{ $user->email}}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Jenis Kelamin</label>
                                                <input type="text" name="jenis_kelamin" class="form-control" required="" value="{{ $user->jenis_kelamin }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat" class="form-control" required="" value="{{ $user->alamat }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Password</label>
                                                <input type="text" name="password" class="form-control" required="" value="{{ $user->password }}">
                                            </div>

                                            {{-- <div class="mb-3">
                                                <label>Password</label>
                                                <div>
                                                    <input parsley-type="url" type="password" name="password" class="form-control" value="">
                                                </div>
                                           </div> --}}



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
