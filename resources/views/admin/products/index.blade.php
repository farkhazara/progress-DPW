@extends('layouts/app')

@section('content')
<main id="main">
    <div class="container mt-5">
        <div class="pagetitle">
            <div class="d-flex justify-content-between mx-2">
                <h1>Data Productss</h1>
                <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah products</a>
            </div>
            <nav class="ms-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">{{ Request::segment(2) }}</li>
                </ol>
            </nav>
        </div>
        <table class="table datatable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->harga }}</td>
                    <td>{{ $d->stok }}</td>
                    <td>{{ $d->deskripsi }}</td>
                    <td>
                        <img src="{{ asset($d->gambar) }}" alt="" width="100px">                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('products.edit', $d->id) }}" class="btn btn-warning">edit</a>
                            <form action="{{ route('products.destroy', $d->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
