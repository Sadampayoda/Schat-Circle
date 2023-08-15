@extends('property.html')


@section('conten')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{asset('image/login/2.jpg')}}" class="login-img border-dark border" alt="">
        </div>
        <div class="col-sm-6 d-flex justify-conten-center align-items-center ">

            <div class="ms-5">
                <div class="row ms-5">
                    <div class="col-12">
                        <h1>Selamat datang di Schat-Circle</h1>
                    </div>
                    <div class="col-12">
                        <p>Silahkan login terlebih dahulu untuk masuk kedalam Schat-circle</p>
                    </div>
                    <div class="col-8 circleFrom">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> <i class="bi bi-person-bounding-box me-2"></i> Email address</label>
                                <input type="email" class="form-control border-dark" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"> <i class="bi bi-file-lock-fill me-2"></i> Password</label>
                                <input type="password" class="form-control border-dark" id="exampleInputPassword1">
                            </div>
                            <div class="d-grid mb-3 mt-2">
                                <button type="submit" class="btn btn-dark">Masuk aplikasi</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#000000" fill-opacity="1" d="M0,0L60,42.7C120,85,240,171,360,197.3C480,224,600,192,720,165.3C840,139,960,117,1080,128C1200,139,1320,181,1380,202.7L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
</svg>
<div class="container-fluid heght-background text-light" style="background-color: #000000">
    <div class="container ">
        <div class="row">
            <div class="col-sm-6">
                <h1>Daftar sekarang !</h1>
                <p>jika anda belum berkunjung atau belum sama sekali mempunyai akun Schat Circle, click gambar orang 2 tersebut</p>
            </div>
            <div class="col-sm-6 d-flex justify-content-center ">
                <a class="text-light" href="{{route('register')}}">
                    <i class="bi bi-people-fill iconInRegis"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#000000" fill-opacity="1" d="M0,0L60,42.7C120,85,240,171,360,197.3C480,224,600,192,720,165.3C840,139,960,117,1080,128C1200,139,1320,181,1380,202.7L1440,224L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
</svg>


<div class="container pb-5">
    <div class="row">
        <div class="col text-center">
            <h1>Schat Circle versi 1.1</h1>
        </div>
    </div>
    <div class="row pb-5 d-flex justify-content-center mt-5">
        <div class="col-10 border mt-4 shadowGreen rounded p-2 ">
            <div class="row">
                <div class="col-10">
                    <p class="pt-3 fs-5 ms-5">Chattingan dengan sesama manusia yang telah login</p>
                </div>
                <div class="col-2 mt-3 text-end ">
                    <i class="bi bi-check-lg fs-5 text-success"></i>
                </div>
            </div>
        </div>
        <div class="col-10 border mt-4 shadowGreen rounded p-2 ">
            <div class="row">
                <div class="col-10">
                    <p class="pt-3 fs-5 ms-5">Anda bisa melihat profile profile yang ada pada chatting</p>
                </div>
                <div class="col-2 mt-3 text-end ">
                    <i class="bi bi-check-lg fs-5 text-success"></i>
                </div>
            </div>
        </div>
        <div class="col-10 border mt-4 shadowGreen rounded p-2 ">
            <div class="row">
                <div class="col-10">
                    <p class="pt-3 fs-5 ms-5">Keamanan terjaga pada untuk data data yang sudah di inputkan</p>
                </div>
                <div class="col-2 mt-3 text-end ">
                    <i class="bi bi-check-lg fs-5 text-success"></i>
                </div>
            </div>
        </div>
        <div class="col-10 border mt-4 shadowGreen rounded p-2 ">
            <div class="row">
                <div class="col-10">
                    <p class="pt-3 fs-5 ms-5">Kata kata tidak sepantasnya tidak akan muncul pada permukaan chatting dan akan di sensor</p>
                </div>
                <div class="col-2 mt-3 text-end ">
                    <i class="bi bi-check-lg fs-5 text-success"></i>
                </div>
            </div>
        </div>
        <div class="col-10 border mt-4 shadowGreen rounded p-2 ">
            <div class="row">
                <div class="col-10">
                    <p class="pt-3 fs-5 ms-5">Bisa melaporkan ketika ada tindakan kejahatan</p>
                </div>
                <div class="col-2 mt-3 text-end ">
                    <i class="bi bi-check-lg fs-5 text-success"></i>
                </div>
            </div>
        </div>
        <div class="col-10 border mt-4 shadowGreen rounded p-2 ">
            <div class="row">
                <div class="col-10">
                    <p class="pt-3 fs-5 ms-5">Anda dapat mengeshare akun sosial media lain pada profile</p>
                </div>
                <div class="col-2 mt-3 text-end ">
                    <i class="bi bi-check-lg fs-5 text-success"></i>
                </div>
            </div>
        </div>
    </div>
</div>

@include('property.footer')
@endsection