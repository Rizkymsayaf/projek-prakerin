@extends('layouts.main')
@section('container')

<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    <div class="card-body text-center">
    </div>
  </div>
@endsection
