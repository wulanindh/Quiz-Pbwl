@extends('layouts.app')

@section('content')
    <h2>Add Golongan</h2>

    <form action="{{ url('golongan') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NO</label>
            <input type="text" name="gol_id" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">KODE</label>
            <input type="text" name="gol_kode" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">NAME</label>
            <input type="text" name="gol_nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
        <div class="mb-3">
            <input type="cancel"value="Cancel" class="btn btn-primary" onclick="window.location='http://localhost/si1/pbwl-quiz/public/golongan';return false;">
        </div>
    </form>
@endsection
