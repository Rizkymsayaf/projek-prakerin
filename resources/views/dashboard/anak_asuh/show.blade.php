@extends('dashboard.layouts.main')
@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">

            <a href="/dashboard/anak_asuh" class="btn btn-success">  <span data-feather="arrow-left"></span>back to anak asuh</a>
            <a href="/dashboard/anak_asuh/{{ $anak_asuh->id }}/edit" class="btn btn-warning">  <span data-feather="edit"></span>Edit</a>
            <form action="/dashboard/donasi/{{ $anak_asuh->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are You Sure')"><span data-feather="x-circle"></span>Delete</button>
            </form>



                <article class="my-3 fs-5">
                    {!! $anak->nama !!}
                    {!! $anak->umur !!}
                    {!! $anak->tanggal_lahir !!}
                </article>


        </div>
    </div>
</div>
@endsection
