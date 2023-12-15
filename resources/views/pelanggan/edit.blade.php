@extends('layouts.app')

@section('content')
    <h2>Edit Pelanggan</h2>

    <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="pel_nama" id="" class="form-control" value="{{ $row->pel_nama }}">
        </div>
        <div class="mb-3">
            <label for="">GOLONGAN</label>
            <input type="text" name="pel_id_gol" id="" class="form-control" value="{{ $row->pel_id_gol }}">
        </div>
        <div class="mb-3">
            <label for="">NO PELANGGAN</label>
            <input type="text" name="pel_no" id="" class="form-control" value="{{ $row->pel_no }}">
        </div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="pel_alamat" id="" class="form-control" value="{{ $row->pel_alamat }}">
        </div>
        <div class="mb-3">
            <label for="">NO HP</label>
            <input type="text" name="pel_hp" id="" class="form-control" value="{{ $row->pel_hp }}">
        </div>
        <div class="mb-3">
            <label for="">USER</label>
            <input type="text" name="pel_id_user" id="" class="form-control" value="{{ $row->pel_id_user }}">
        </div>
        <div class="mb-3">
            <label for="">KTP</label>
            <input type="text" name="pel_ktp" id="" class="form-control" value="{{ $row->pel_ktp }}">
        </div>
        <div class="mb-3">
            <label for="">SERI</label>
            <input type="text" name="pel_seri" id="" class="form-control" value="{{ $row->pel_seri }}">
        </div>
        <div class="mb-3">
            <label for="">METERAN</label>
            <input type="text" name="pel_meteran" id="" class="form-control" value="{{ $row->pel_meteran }}">
        </div>
        <div class="mb-3">
            <label for="">AKTIF</label>
            <select name="pel_aktif" required>
                    <option value="Y">Ya</option>
                    <option value="N">Tidak</option>
                </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
