@extends('property.html')

@section('conten')
@include('property.navbar')
<div class="container mt-5 pt-5">
    <div class="row border border-dark shadow rounded p-5">
        <div class="col-7">
            <div class="mb-3 mt-3">
                <label class="form-label">Password lama</label>
                <input type="password" name="passwordOld" class="form-control border-dark p-2 " >
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Password baru</label>
                <input type="text" name="password" class="form-control border-dark p-2 " >
            </div>
            <div class="mb-3 mt-3">
                <label  class="form-label">Konfirmasi password</label>
                <input type="text" name="konfirmasi" class="form-control border-dark p-2 " >
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-dark">Ubah password</button>
            </div>
        </div>
    </div>
</div>
@endsection