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
        <div class="row mt-4 border-top border-dark">
            <div class="col">
                <p class="fs-5">Sosial Media</p>
                <div class="row">
                    <div class="col-3">
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-primary">Delete</button>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-1">
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="col-1">
                        <i class="bi bi-whatsapp fs-2"></i>
                    </div>
                    <div class="col-5 border border-dark bg-light rounded-3 shadow p-1">
                        
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-1">
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="col-1">
                        <i class="bi bi-instagram fs-2"></i>
                    </div>
                    <div class="col-5 border border-dark bg-light rounded-3 shadow p-1">
                        
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-1">
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="col-1">
                        <i class="bi bi-github fs-2"></i>
                    </div>
                    <div class="col-5 border border-dark bg-light rounded-3 shadow p-1">
                        
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-1">
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="col-1">
                        <i class="bi bi-twitter fs-2"></i>
                    </div>
                    <div class="col-5 border border-dark bg-light rounded-3 shadow p-1">
                        
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-1">
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="col-1">
                        <i class="bi bi-telegram fs-2"></i>
                    </div>
                    <div class="col-5 border border-dark bg-light rounded-3 shadow p-1">
                        
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-1">
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="col-1">
                        <i class="bi bi-discord fs-2"></i>
                    </div>
                    <div class="col-5 border border-dark bg-light rounded-3 shadow p-1">
                        
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-1">
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="col-1">
                        <i class="bi bi-tiktok fs-2"></i>
                    </div>
                    <div class="col-5 border border-dark bg-light rounded-3 shadow p-1">
                        
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-1">
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="col-1">
                        <i class="bi bi-link fs-2"></i>
                    </div>
                    <div class="col-5 border border-dark bg-light rounded-3 shadow p-1">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 pb-5 pt-3 d-flex justify-content-center">
            <div class="col-6 d-grid text-center">
                <a href="{{route('editProfile')}}" class="btn btn-dark">Edit profile</a>
            </div>
        </div>
    </div>
</div>
@include('property.footer')
@endsection