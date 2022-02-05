@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Donasi</h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success  col-lg-8" role="alert">

{{ session('success') }}
  </div>

  @endif

  <div class="table-responsive col-lg-8">
      <a href="/dashboard/anak/create" class="btn btn-primary mb-3">Create New </a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Umur</th>
          <th scope="col">Tanggal Lahir</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($anak as $a)

          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $a->nama }}</td>
            <td>{{  $a->umur}} Tahun</td>
            <td>{{  $a->tanggal_lahir}}</td>
            <td>
                <a href="{{route('anak.show',$a->id)}}" class="badge bg-info"> <span data-feather="eye"></a>
                    <a href="/dashboard/anak/{{ $a->id }}/edit" class="badge bg-warning"> <span data-feather="edit"></span></a>
                    <form action="/dashboard/anak/{{ $a->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure')"><span data-feather="x-circle"></span></button>
                    </form>
            </td>
            </td>

        </tr>

        @endforeach



      </tbody>
    </table>
  </div>
@endsection
