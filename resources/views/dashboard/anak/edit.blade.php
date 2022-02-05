@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> edit data Anak</h1>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/anak/{{ $a->id }}  " class="mb-5">
        @csrf
        @method('put')
        <div class="mb-3">
          <label for="nama" class="form-label">nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required  autofocus value="{{ old('nama', $a->nama) }}">
          @error('nama')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>
        <div class="mb-3">
          <label for="umur" class="form-label">Umur</label>
          <input type="number" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" required  autofocus value="{{ old('umur', $a->umur) }}">
          @error('umur')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>
        <div class="mb-3">
          <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" required  autofocus
          value="{{ old('tanggal_lahir', $a->tanggal_lahir) }}">

          @error('tanggal_lahir')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror

        <button type="submit" class="btn btn-primary">Create</button>
      </form>
  </div>

@endsection
