@extends('property.html')

@section('conten')
@include('property.navbar')
<div class="container mt-5 pt-5">
    <form action="" method="post">

        <div class="row border shadow p-4 rounded">
            <div class="col-7">
                <div class="mb-3 mt-3">
                    <label  class="form-label">Name</label>
                    <input type="text" name="name" class="form-control border-dark p-2 " >
                </div>
                <div class="mb-3 mt-3">
                    <label  class="form-label">Username</label>
                    <input type="text" name="username" class="form-control border-dark p-2 " >
                </div>
                <div class="mb-3 mt-3">
                    <label  class="form-label">Tanggal lahir</label>
                    <input type="date" name="date" class="form-control border-dark p-2 " >
                </div>
                <div class="form-check form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="pria">
                    <label class="form-check-label" >Pria</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="wanita">
                    <label class="form-check-label" >Wanita</label>
                </div>
            </div>
        </div>
    
        <div class="row mt-5 border shadow p-4 rounded">
            <div class="col-7">
                <div class="mb-3 ">
                    <label  class="form-label ">Deskripsikan diri kamu</label>
                    <textarea class="form-control border-dark" rows="6"></textarea>
                </div>
                <div class="col">
                    <img src="{{asset('image/chatting/profile-chatting.jpg')}}" class="img-fluid border border-dark" id="previewImage" alt="...">
                </div>
                
                <div class="mb-3 mt-3">
                    <input type="file" id="imageInput" name="photo" class="form-control border-dark p-2 " >
                </div>
            </div>
        </div>
    
        <div class="row mt-5 mb-5 pb-5 border shadow p-4 rounded">
            <div class="col-12 mt-2">
                <div class="mb-3">
                    <button class="btn btn-dark" id="addButton">Add Sosial media</button>
                </div>
                <div id="inputContainer"></div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-5 mt-5">
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-dark">Update data</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row mt-5 p-5 border shadow p-4 rounded justify-content-center">
        <div class="col-6 d-grid">
            <a href="{{route('changePassword')}}" class="btn btn-dark">Ganti password</a>
        </div>
    </div>
</div>
@endsection