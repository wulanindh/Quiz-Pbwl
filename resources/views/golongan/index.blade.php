
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
<h2>Data Golongan</h2>

<a href="{{ url('golongan/create') }}" class="btn btn-md btn-success">Add Golongan</a>

<table class="table table-bordered">

    <tr>
        <th>NO</th>
        <th>KODE</th>
        <th>NAMA</th>
        <th>EDIT</th>
        <th>DELETE</th>
    
    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->gol_id }}</td>
        <td>{{ $row->gol_kode }}</td>
        <td>{{ $row->gol_nama }}</td>
      
        <td><a href="{{ url('golongan/edit/' . $row->gol_id) }}" class="btn btn-warning">Edit</a></td>
        <td>
                        <form action="{{ url('golongan/' . $row->gol_id) }}" method="post">
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