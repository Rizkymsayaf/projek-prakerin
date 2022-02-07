@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/pengasuh/{{ $p->id }} " class="mb-5"  enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required  autofocus value="{{ old('nama', $p->nama) }}">
          @error('nama')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <input type="text" class="form-control  @error('alamat') is-invalid @enderror" id="alamat" name="alamat"  required  autofocus value="{{ old('alamat', $p->alamat) }}
             required autofocu value="{{ old('alamat', $p->alamat) }}">
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
          </div>
          <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control  @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required autofocu value="{{ old('tanggal', $p->tanggal) }}">
            @error('tanggal')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
          </div>

          <div class="mb-3">
            <label for="image" class="form-label">foto</label>
            <input type="hidden" name="oldImage" value="{{ $p->image }}">
            <img src="{{ asset('storage/'. $p->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            <input class="form-control @error('image') is-invalid @enderror " type="file" id="image"
            name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>

  <script>
    function previewImage(){

    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.  img-preview');
    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.file[0]);

    oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
    }
    }
    </script>

@endsection
