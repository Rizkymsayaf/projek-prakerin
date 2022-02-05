@extends('dashboard.layouts.main')
@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">Data Pengasuh</h1>

            <a href="/dashboard/pengasuh" class="btn btn-success">  <span data-feather="arrow-left"></span>Back To all My Data</a>
            <a href="/dashboard/pengasuh/{{ $pengasuh->id }}/edit" class="btn btn-warning">  <span data-feather="edit"></span>Edit</a>
            <form action="/dashboard/pengasuh/{{ $pengasuh->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are You Sure')"><span data-feather="x-circle"></span>Delete</button>
            </form>

            <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggal </th>
                </tr>
                </thead>
                <tbody>

                    <tr>
                      <td>{{ $pengasuh->nama }}</td>
                      <td>{{  $pengasuh->status}}</td>
                      <td>{{  $pengasuh->tanggal}}</td>

                    </tr>

                </tbody>
              </table>

        </div>
    </div>
</div>
@endsection




