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
<h2>Data User</h2>

<table class="table table-bordered">
    <tr>
    <th>NO</th>
        <th>EMAIL</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>HP</th>
        <th>POS</th>
        <th>ROLE</th>
        <th>AKTIF</th>
        <th>EDIT</th>
        <th>DELETE</th>


    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->user_nama }}</td>
        <td>{{ $row->user_alamat }}</td>
        <td>{{ $row->user_hp }}</td>
        <td>{{ $row->user_pos }}</td>
        <td>{{ $row->user_role }}</td>
        <td>{{ $row->user_aktif }}</td>
        <td><a href="{{ url('user/edit/' . $row->id) }}" class="btn btn-warning">Edit</a></td>
        <td>
                        <form action="{{ url('user/' . $row->id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
    </tr>
    @endforeach
</table>
</div>

@endsection