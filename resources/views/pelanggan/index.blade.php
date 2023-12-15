@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>

  <body>

  <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">


<div class="container">
<h2>Data Pelanggan</h2>

<a href="{{ url('pelanggan/create') }}" class="btn btn-md btn-success">Add Pelanggan</a>

<table class="table table-bordered"  >
    <tr>
        <th>NO</th>
        <th>ID GOLONGAN</th>
        <th>NOMOR</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>HP</th>
        <th>KTP</th>
        <th>SERI</th>
        <th>METERAN</th>
        <th>AKTIF</th>
        <th>ID USER</th>
        <th>EDIT</th>
        <th>DELETE</th>

    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->pel_id }}</td>
        <td>{{ $row->pel_id_gol }}</td>
        <td>{{ $row->pel_no }}</td>
        <td>{{ $row->pel_nama }}</td>
        <td>{{ $row->pel_alamat }}</td>
        <td>{{ $row->pel_hp }}</td>
        <td>{{ $row->pel_ktp }}</td>
        <td>{{ $row->pel_seri }}</td>
        <td>{{ $row->pel_meteran }}</td>
        <td>{{ $row->pel_aktif }}</td>
        <td>{{ $row->pel_id_user }}</td>
   
        <td><a href="{{ url('pelanggan/edit/' . $row->pel_id) }}" class="btn btn-warning">Edit</a></td>
        @method('DELETE')
        <td>
                        <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
    </tr>
    @endforeach
</table>
</div>
</body>
@endsection