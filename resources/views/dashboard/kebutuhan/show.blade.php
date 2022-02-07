@extends('dashboard.layouts.main')
@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">






                <div class="table-responsive col-lg-8">
                    <a href="/dashboard/kebutuhan" class="btn btn-success">  <span data-feather="arrow-left"></span>back to kebutuhan</a>
                    <a href="/dashboard/kebutuhan/{{ $kebutuhan->id }}/edit" class="btn btn-warning">  <span data-feather="edit"></span>Edit</a>
                    <form action="/dashboard/kebutuhan/{{ $kebutuhan->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are You Sure')"><span data-feather="x-circle"></span>Delete</button>
                    </form>

                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga Barang</th>
                        <th scope="col">jumlah Barang</th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                          <td>{{ $kebutuhan->nama_barang }}</td>
                          <td>{{  $kebutuhan->harga_barang}}</td>
                          <td>{{  $kebutuhan->jumlah_barang}}</td>

                        </tr>

                    </tbody>
                  </table>


        </div>
    </div>
</div>
@endsection
