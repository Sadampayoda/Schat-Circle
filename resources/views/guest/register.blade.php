@extends('property.html')

@section('conten')

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col border-bottom pb-5 text-center">
            <h1>Registrasion</h1>
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
                <h1>Masuk sekarang !</h1>
                <p>jika anda sudah mempunyai akun Schat Circle silahkan login dengan mengeclick icon gambar 2 orang tersebut</p>
            </div>
            <div class="col-sm-6 d-flex justify-content-center ">
                <a class="text-light" href="{{route('login')}}">
                    <i class="bi bi-people-fill iconInRegis"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#000000" fill-opacity="1" d="M0,0L60,42.7C120,85,240,171,360,197.3C480,224,600,192,720,165.3C840,139,960,117,1080,128C1200,139,1320,181,1380,202.7L1440,224L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
</svg>

<div class="container mb-5 pb-5">
    <div class="row pb-5">
        <div class="col mb-4">
            <h1>Apa itu Schat Circle ?</h1>
        </div>
    </div>
    <div class="row">
        <div class="col fs-5">
            <p>Schat Circle adalah sebuah aplikasi revolusioner dalam dunia chatting yang dirancang untuk membawa pengalaman berkomunikasi yang luar biasa bagi semua orang. Dengan fokus utama pada kenyamanan dan konektivitas, Schat Circle menghadirkan platform chatting yang menghubungkan orang-orang dari berbagai latar belakang, usia, dan lokasi. Aplikasi ini membawa kebebasan berinteraksi dengan mudah dan cepat, memungkinkan penggunanya berbagi cerita, pemikiran, dan momen spesial dengan keluarga, teman, dan kolega tanpa batasan apapun.
            </p>
            <p>
                Dengan antarmuka yang intuitif dan ramah pengguna, Schat Circle menyediakan berbagai fitur canggih seperti obrolan pribadi, grup chatting, pengiriman gambar, video, dan pesan suara. Fitur-fitur keamanan terdepan dijamin melindungi privasi pengguna, memastikan bahwa setiap obrolan tetap pribadi dan aman.
            </p>

            <p>
                Schat Circle mewujudkan visi tentang dunia yang lebih terhubung melalui teknologi. Ini adalah aplikasi yang mengubah cara kita berkomunikasi, menghadirkan ruang yang dinamis dan ramah untuk berbagi pengalaman hidup dan mempererat ikatan sosial di seluruh dunia.
            </p>
                
                
        </div>
    </div>
</div>

@endsection