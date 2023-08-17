@extends('property.html')


@section('conten')
@include('property.navbar')
<div class="container mt-5 pt-5 ">
    <div class="row border border-dark  bg-dark text-light p-2">
        <div class="col-3 ">
            <img src="{{asset('image/chatting/profile-chatting.jpg')}}" class="img-thumbnail rounded-circle" alt="...">
        </div>
        <div class="col mt-3">
            <p class="fs-5">Grup Schat circle official</p>
        </div>
    </div>
    <div class="row border scroll-container scroll-vertical size-chat border-dark rounded shadow">
        <div class="col">
            <div class="row">
                <div class="col-8 rounded text-light chat-message mt-2 ms-2 ">
                    <p class=""><a class="fs-5 text-decoration-none text-dark" href="">Sadam Payoda</a> 
                        <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi aliquid odio explicabo ullam reiciendis dolorem dolore, sequi sint! Enim molestiae voluptate quasi non ipsum facere! Enim et unde
                    </p>
                </div>
            </div>
            <div class="row d-flex justify-content-end ">
                <div class="col-8 me-2 rounded text-light chat-message mt-2 ms-2 ">
                    <p class="text-end"><a class="fs-5 text-decoration-none text-dark " href="">Sadam Payoda</a> 
                        <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi aliquid odio explicabo ullam reiciendis dolorem dolore, sequi sint! Enim molestiae voluptate quasi non ipsum facere! Enim et unde
                    </p>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-8 rounded text-light chat-message mt-2 ms-2 ">
                    <p class=""><a class="fs-5 text-decoration-none text-dark" href="">Sadam Payoda</a> 
                        <br>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero doloribus beatae fuga ratione laudantium impedit quos dignissimos! Eius dicta debitis itaque, impedit consequatur veniam commodi nisi officiis minus dolore natus, sint iusto nostrum officia, delectus corporis quas error sapiente tenetur corrupti ex praesentium beatae aperiam. Nulla ipsam consectetur possimus temporibus blanditiis dolorem distinctio delectus autem deleniti. In, porro facere laboriosam quas sequi reprehenderit voluptatem veniam fugit aut architecto iusto incidunt ratione quam minima dolore nulla deleniti suscipit, illo harum unde nihil temporibus autem? Porro, pariatur dolor, provident consequatur facere voluptatum perspiciatis beatae assumenda rem ipsam velit harum? Similique, consequatur id! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis sit molestias in et amet quibusdam reiciendis ratione omnis ut recusandae, at praesentium facilis dolores voluptas repellendus nulla optio rem laboriosam iste qui nobis aliquid aut harum. Eveniet tempora sequi adipisci.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row border border-dark  bg-dark text-light p-2">
        <div class="col">
            <div class="input-group p-3 ">
                <input type="text" class="form-control" placeholder="Ketik apa yang kamu mau..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <button class="input-group-text btn btn-dark border-light" id="basic-addon2">Send</button>
              </div>              
        </div>
    </div>
</div>

@endsection