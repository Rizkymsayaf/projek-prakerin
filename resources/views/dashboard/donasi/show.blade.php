@extends('dashboard.layouts.main')
@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">






                <div class="table-responsive col-lg-8">
                    <a href="/dashboard/donasi" class="btn btn-success">  <span data-feather="arrow-left"></span>back to donasi</a>
                    <a href="/dashboard/donasi/{{ $donasi->id }}/edit" class="btn btn-warning">  <span data-feather="edit"></span>Edit</a>
                    <form action="/dashboard/donasi/{{ $donasi->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are You Sure')"><span data-feather="x-circle"></span>Delete</button>
                    </form>

                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Rekening</th>
                        <th scope="col">Bank</th>
                        <th scope="col">Nominal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                          <td>{{ $donasi->nama }}</td>
                          <td>{{  $donasi->alamat}}</td>
                          <td>{{  $donasi->No_Rekening}}</td>
                          <td>{{  $donasi->bank}}</td>
                          <td>{{  $donasi->nominal}}</td>

                        </tr>

                    </tbody>
                  </table>


        </div>
    </div>
</div>
@endsection
