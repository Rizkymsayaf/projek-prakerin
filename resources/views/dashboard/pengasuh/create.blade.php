@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new Data</h1>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/pengasuh " class="mb-5">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required  autofocus value="{{ old('nama') }}">
          @error('nama')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select class="form-select" name="status">
           <option value="hadir">hadir</option>
           <option value="tidak">Tidak Hadir</option>
          </select>
          @error('status')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required  autofocus value="{{ old('tanggal') }}">
            @error('tanggal')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
      </form>
  </div>
@endsection