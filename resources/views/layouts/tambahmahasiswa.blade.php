@extends('layouts.main');

@section('content')
    <h1>Tambah Data Mahasiswa</h1>
@endsection
<div class="card">
    <div class="card-body">
    <form action="/insertdata" method="POST" enctype="multipart/form-data">
        @csrf
    <form>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="NIM" class="form-label">Nomor Induk(NIM)</label>
    <input type="number"  class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="prodi" class="form-label">Program Study</label>
    <input type="text" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="email " class="form-label">Email</label>
    <input type="password" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="nohp" class="form-label">Nomor Handphone</label>
    <input type="number" class="form-control" >
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</form>