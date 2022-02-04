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
      <a href="/dashboard/donasi/create" class="btn btn-primary mb-3">Create New </a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">No_Rekening</th>
          <th scope="col">Bank</th>
          <th scope="col">Nominal</th>
        </tr>
      </thead>
      <tbody>
        <?php $nom = 0; ?>
        @foreach ($donasi as $d)

        <?php $nom += $d->nominal; ?>
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{  $d->alamat}}</td>
            <td>{{  $d->No_Rekening}}</td>
            <td>{{  $d->bank}}</td>
            <td>{{  $d->nominal}}</td>
            <td>
                <a href="{{route('donasi.show',$d->id)}}" class="badge bg-info"> <span data-feather="eye"></a>
                    <a href="/dashboard/donasi/{{ $d->id }}/edit" class="badge bg-warning"> <span data-feather="edit"></span></a>
                    <form action="/dashboard/donasi/{{ $d->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure')"><span data-feather="x-circle"></span></button>
                    </form>
            </td>
            </td>

        </tr>

        @endforeach
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>
                  <b>Total</b>
                {{ $nom }}
            </td>
        </tr>



      </tbody>
    </table>
  </div>
@endsection
