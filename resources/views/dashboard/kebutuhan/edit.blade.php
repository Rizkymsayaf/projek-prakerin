@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new Data</h1>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/kebutuhan/{{ $k->id }}  " class="mb-5">
        @csrf
        @method('put')
        <div class="mb-3">
          <label for="nama_barang" class="form-label">Nama Barang</label>
          <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" name="nama_barang"
           required  autofocus value="{{ old('nama_barang', $k->nama_barang) }}">
          @error('nama_barang')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>
        <div class="mb-3">
          <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
          <input type="number" class="form-control @error('jumlah_barang') is-invalid @enderror" id="jumlah_barang" name="jumlah_barang"
           required  autofocus value="{{ old('jumlah_barang', $k->jumlah_barang) }}">
          @error('alamat')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>
        <div class="mb-3">
          <label for="harga_barang" class="form-label">Harga Barang</label>
          <input type="number" class="form-control @error('harga_barang') is-invalid @enderror"
          id="harga_barang" name="harga_barang" required  autofocus value="{{ old('harga_barang', $k->harga_barang) }}">

          @error('harga_barang')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
  </div>

@endsection
