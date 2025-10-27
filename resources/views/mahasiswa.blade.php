@extends('layouts.main')

@section('content')
    <h1 class="text-center">Data Mahasiswa</h1>
    <br>
    <button type="button" class="btn btn-success">Tambah Data+</button>
    protected $fillable = ['nama', 'nim', 'email', 'jurusan', 'alamat'];
    <table class="table">
  <thead>
    <tr>
      <th scope="col">nama</th>
      <th scope="col">NIM</th>
      <th scope="col">nohp</th>
      <th scope="col">aksi</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $mahasiswa )
    
    @endforeach
    <tr>
      <th scope="row">1</th>
      <td>Inayah Sykan Nazifa</td>
      <td>13242420028</td>
      <td>087853264806</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Aldi Winata</td>
      <td>1324242013</td>
      <td>089865231441</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Rizka Oktavia</td>
      <td>1324242012</td>
      <td>08512351176</td>

      <button type="button" class="btn btn-primary">Primary</button>
      <button type="button" class="btn btn-danger">Danger</button>

    </tr>
    @endforeach
  </tbody>
</table>


@endsection