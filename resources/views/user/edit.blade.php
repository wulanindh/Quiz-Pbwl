@extends('layouts.app')

@section('content')
    <h2>Edit Pelanggan</h2>

    <form action="{{ url('user/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="user_nama" id="" class="form-control" value="{{ $row->user_nama }}">
        </div>
        <div class="mb-3">
            <label for="">EMAIL</label>
            <input type="text" name="email" id="" class="form-control" value="{{ $row->email }}">
</div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="user_alamat" id="" class="form-control" value="{{ $row->user_alamat }}">
        </div>
        <div class="mb-3">
            <label for="">NO HP</label>
            <input type="text" name="user_hp" id="" class="form-control" value="{{ $row->user_hp }}">
        </div>
        <div class="mb-3">
            <label for="">POS</label>
            <input type="text" name="user_pos" id="" class="form-control" value="{{ $row->user_pos }}">
        </div>
        <div class="mb-3">
            <label for="">ROLE</label>
            <input type="text" name="user_role" id="" class="form-control" value="{{ $row->user_role }}">
        </div>
            <label for="">AKTIF</label>
            <input type="text" name="user_aktif" id="" class="form-control" value="{{ $row->user_aktif }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
