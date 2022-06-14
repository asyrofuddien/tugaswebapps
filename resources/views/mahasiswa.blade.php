<!-- Menghubungkan dengan view template master -->
@extends('layout/tamplate')

@section('title','Data Mahasiswa')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<div class="container-fluid">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        
      </tr>
    </thead>
    <tbody>
      <?php $i=1 ;?>
      @foreach($users as $u)
        <tr>
          <th scope="row"><?= $i++ ?></th>
          <td>{{$u->nama}}</td>
          <td>{{$u->email}}</td>
        </tr>
      @endforeach    
    </tbody>
  </table>
</div>
@if($users->hasPages())
   <div class="card-footer">
      {{ $users->links() }}
    </div>
@endif


@endsection