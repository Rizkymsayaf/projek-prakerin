@extends('dashboard.layouts.main')
@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">






                <div class="table-responsive col-lg-8">
                    <a href="/dashboard/anak" class="btn btn-success">  <span data-feather="arrow-left"></span>back to donasi</a>
                    <a href="/dashboard/anak/{{ $anak->id }}/edit" class="btn btn-warning">  <span data-feather="edit"></span>Edit</a>
                    <form action="/dashboard/anak/{{ $anak->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are You Sure')"><span data-feather="x-circle"></span>Delete</button>
                    </form>

                    <div style="max-height:350px; overflow:hidden;">

                        <img src="{{ asset('storage/'. $anak->image) }}" alt="{{ $anak->image }}" class="img-fluid mt-3">
                    </div>

                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Tanggal Lahir</th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                          <td>{{ $anak->nama }}</td>
                          <td>{{  $anak->umur}}</td>
                          <td>{{  $anak->tanggal_lahir}}</td>

                        </tr>

                    </tbody>
                  </table>


        </div>
    </div>
</div>
@endsection
