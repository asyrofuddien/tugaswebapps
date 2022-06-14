<!-- Menghubungkan dengan view template master -->
@extends('layout/tamplate')

@section('title','HOME')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul', 'Halaman Home')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
@include('sweetalert::alert')
<div class="tab-content" id="v-pills-tabContent">
    <div class="jumbotron">
        <h1 class="display-4">Selamat Datang </h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
      </div>

@endsection