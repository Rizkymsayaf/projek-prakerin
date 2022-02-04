@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Anak Asuh</h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">

{{ session('success') }}
  </div>

  @endif

  <div class="table-responsive col-lg-8">
      <a href="/dashboard/anak_asuh/create" class="btn btn-primary mb-3">Create New Anak_Asuh</a>
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
          @foreach ($anak_Asuh as $anak)

          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $anak->nama }}</td>
            <td>{{  $anak->umur}}</td>
            <td>{{  $anak->tanggal_lahir}}</td>
            <td>
                <a href="{{route('anak_asuh.show',$anak->id)}}" class="badge bg-info"> <span data-feather="eye"></a>
                    <a href="/dashboard/anak_asuh/{{ $anak->id }}/edit" class="badge bg-warning"> <span data-feather="edit"></span></a>
                    <form action="/dashboard/anak_asuh/{{ $anak->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure')"><span data-feather="x-circle"></span></button>
                    </form>
            </td>
          </tr>
          @endforeach

      </tbody>
    </table>
  </div>
@endsection
