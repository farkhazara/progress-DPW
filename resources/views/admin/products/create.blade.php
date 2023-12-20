@extends('layouts/app')

@section('content')
    <div class="main-container p-5">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div>
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Tambah Product</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Form Basic
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <a href="{{ route('products.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->


            <!-- horizontal Basic Forms Start -->
            <div class="pd-20 card-box mb-20">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Tambahkan Data Product</h4>
                    </div>
                    <div class="pull-right">
                    </div>
                </div>
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="#title" class="form-label">Nama Product</label>
                        <input class="form-control" type="text"id="nama" name="nama" placeholder="Masukan Nama"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="#harga" class="form-label">Harga</label>
                        <input class="form-control" type="number" id="harga" name="harga"
                            placeholder="Masukan Harga" required />
                    </div>
                    <div class="form-group">
                        <label for="#stok" class="form-label">Stok</label>
                        <input class="form-control" type="number" id="stok" name="stok"
                            placeholder="Masukan Stok" required />
                    </div>
                    <div class="form-group">
                        <label for="#deskripsi" class="form-label">Deskripsi</label>
                        <input class="form-control" type="text" id="deskripsi" name="deskripsi"
                            placeholder="Masukan Deskripsi" required />
                    </div>
                    <div class="form-group">
                        <label for="#gambar" class="form-label">Gambar</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input form-control" id="gambar" name="gambar" required/>
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" style="width: 100%" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- horizontal Basic Forms End -->
    </div>
    </div>
    </div>
@endsection
