@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data</h1>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/anak_asuh/{{ $anak->id }}  " class="mb-5">
        @csrf
        @method('put')
        <div class="mb-3">
          <label for="title" class="form-label">nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="title" name="nama" required  autofocus value="{{ old('nama', $anak->nama)  }}">
          @error('nama')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>
        <div class="mb-3">
          <label for="umur" class="form-label">Umur</label>
          <input type="text" class="form-control  @error('umur') is-invalid @enderror" id="umur" name="umur" required autofocus value="{{ old('umur', $anak->umur) }}">
          @error('umur')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">tanggal_lahir</label>
            <input type="date" class="form-control  @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir"
            required autofocus value="{{ old('tanggal_lahir', $anak->tanggal_lahir) }}">
            @error('tanggal_lahir')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
  </div>

@endsection