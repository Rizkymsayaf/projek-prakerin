@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Absen</h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">

{{ session('success') }}
  </div>

  @endif

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">No Rekening</th>
          <th scope="col">Bank</th>
          <th scope="col">Nominal</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($donasi as $d)

          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->alamat }}</td>
            <td>{{ $d->No_Rekening }}</td>
            <td>{{ $d->bank }}</td>
            <td>{{ $d->nominal }}</td>

          </tr>
          @endforeach

      </tbody>
    </table>
  </div>
  @endsection
