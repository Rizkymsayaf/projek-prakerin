@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new donasi</h1>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/donasi " class="mb-5">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required  autofocus value="{{ old('nama') }}">
          @error('nama')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">alamat</label>
          <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required  autofocus value="{{ old('alamat') }}">
          @error('alamat')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>
        <div class="mb-3">
          <label for="No_Rekening" class="form-label">No Rekening</label>
          <input type="number" class="form-control @error('No_Rekening') is-invalid @enderror" id="No_Rekening" name="No_Rekening" required  autofocus value="{{ old('No_Rekening') }}">
          @error('No_Rekening')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Nama Bank</label>
            <select class="form-select" name="bank">
             <option value="Mandiri">Mandiri</option>
             <option value="Bri">Bri</option>
             <option value="Bca">Bca</option>
            </select>
            @error('status')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
          </div>
        <div class="mb-3">
          <label for="nominal" class="form-label">Nominal</label>
          <input type="number" class="form-control @error('nominal') is-invalid @enderror" id="nominal" name="nominal" required  autofocus value="{{ old('nominal') }}">
          @error('nominal')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
  </div>

@endsection
