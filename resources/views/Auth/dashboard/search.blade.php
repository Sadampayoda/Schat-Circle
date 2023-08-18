@extends('property.html')

@section('conten')
@include('property.navbar')
<div class="container mt-5 pt-5">
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h1>SEARCH SCHAT CIRCLE...</h1>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-8">
                <form action="" >
                    <div class="input-group p-3 ">
                        <input type="text" class="form-control p-3 border-dark rounded-4" placeholder="Ketik apa yang kamu cari..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                </form>
                <p class="ms-3">Hasil pencarian : 0</p>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-2">
        <div class="col-md-4 m-3 border border-dark p-3 shadowProfile rounded-1">
            <div class="row">
                <div class="col-7">
                    <h6>Sadam</h6>
                    <p>Sadam payoda sabilillah</p>
                </div>
                <div class="col-4 mt-2 ms-4">
                    <a class="btn btn-dark" href="">view profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 m-3 border border-dark p-3 shadowProfile rounded-1">
            <div class="row">
                <div class="col-7">
                    <h6>Sadam</h6>
                    <p>Sadam payoda sabilillah</p>
                </div>
                <div class="col-4 mt-2 ms-4">
                    <a class="btn btn-dark" href="">view profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 m-3 border border-dark p-3 shadowProfile rounded-1">
            <div class="row">
                <div class="col-7">
                    <h6>Sadam</h6>
                    <p>Sadam payoda sabilillah</p>
                </div>
                <div class="col-4 mt-2 ms-4">
                    <a class="btn btn-dark" href="">view profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 m-3 border border-dark p-3 shadowProfile rounded-1">
            <div class="row">
                <div class="col-7">
                    <h6>Sadam</h6>
                    <p>Sadam payoda sabilillah</p>
                </div>
                <div class="col-4 mt-2 ms-4 ">
                    <a class="btn btn-dark" href="">view profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection