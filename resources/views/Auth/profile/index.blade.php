@extends('property.html')

@section('conten')
@include('property.navbar')

<div class="container-fluid" style="background: #f6f2f2dd">
    <div class="container mt-5 pt-5" >
        <div class="row mt-5">
            <div class="col border-bottom pb-5">
                <h1>Profile Sadam payoda</h1>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-7 border-end border-dark p-2 ">
                <img src="{{asset('image/login/1.jpg')}}" class="img-fluid rounded-4 shadow" alt="...">
            </div>
            <div class="col-md-4 ">
                <div class="col m-4 p-2 bg-light border border-dark shadow rounded-3">
                    <p class="fs-5">Nama          : Sadam</p>
                </div>
                <div class="col m-4 p-2 bg-light border border-dark shadow rounded-3">
                    <p class="fs-5">Username      :Sadam payoda sabilillah</p>
                </div>
                <div class="col m-4 p-2 bg-light border border-dark shadow rounded-3">
                    <p class="fs-5">Tanggal lahir :Sadam payoda sabilillah</p>
                </div>
                <div class="col m-4 p-2 bg-light border border-dark shadow rounded-3">
                    <p class="fs-5">Jenis kelamin : Laki laki</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 border-top border-dark">
            <div class="col">
                <p class="fs-5">Deskripsi</p>
                <div class="col border border-dark bg-light rounded-3 shadow p-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia doloribus velit reprehenderit obcaecati, quisquam, perferendis facere tempora similique dolore ex odio incidunt dignissimos iste cum at dolor ipsa nostrum maiores?
                </div>
            </div>
        </div>
    </div>
</div>

@endsection