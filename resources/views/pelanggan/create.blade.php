@extends('layouts.app')

@section('content')
    <h2>Add Pelanggan</h2>

    <form action="{{ url('pelanggan') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NO </label>
            <input type="text" name="pel_id" id="" class="form-control">
        </div><div class="mb-3">
            <label for="">GOLONGAN</label>
            <input type="text" name="pel_id_gol" id="" class="form-control"></div>
            <div class="mb-3">
            <label for="">NO PELANGGAN</label>
            <input type="text" name="pel_no" id="" class="form-control">
      
        </div><div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="pel_nama" id="" class="form-control">
        </div><div class="mb-3">
            <label for="">ALAMAT </label>
            <input type="text" name="pel_alamat" id="" class="form-control">
        </div><div class="mb-3">
            <label for="">HP</label>
            <input type="text" name="pel_hp" id="" class="form-control">
        </div><div class="mb-3">
            <label for="">KTP</label>
            <input type="text" name="pel_ktp" id="" class="form-control">
        </div><div class="mb-3">
            <label for="">SERI</label>
            <input type="text" name="pel_seri" id="" class="form-control">
        </div><div class="mb-3">
            <label for="">METERAN</label>
            <input type="text" name="pel_meteran" id="" class="form-control">
        </div><div class="mb-3">
            <label for="">AKTIF</label>
            <select name="pel_aktif" required>
                    <option value="Y">Ya</option>
                    <option value="N">Tidak</option>
                </select>
        </div><div class="mb-3">
            <label for="">USER</label>
            <input type="text" name="pel_id_user" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
        <div class="mb-3">
            <input type="cancel"value="Cancel" class="btn btn-primary" onclick="window.location='http://localhost/si1/pbwl-quiz/public/pelanggan';return false;">
        </div>
    </form>
@endsection
