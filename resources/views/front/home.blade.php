@extends('front.layouts.frontend')

@section('content')
<!-- About Us -->
<p class="h1 fw-semibold text-center mt-5">About Us</p>
<div class="subheading">
    <p class="text-center mt-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velit vel odio ligula dolor bibendum diam lacus morbi volutpat. Amet consequat tellus proin volutpat risus nulla. Nullam molestie eu sem fames lectus metus proin ultricies. Commodo diam pretium in sed neque, venenatis. Nunc nisl metus tincidunt adipiscing et quis. Mattis orci feugiat condimentum vel, at ullamcorper nibh placerat. Sed cursus urna facilisis varius tristique. Elit lobortis cursus faucibus suspendisse nulla aenean maecenas et. Consequat dui eros, eget eu odio euismod. Non id rhoncus tempor ut pharetra enim dictumst tristique. Bibendum suspendisse pulvinar lacus felis volutpat egestas commodo a quam. Malesuada tempus rhoncus amet fermentum nunc Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa tempora asperiores eaque dolorum quo blanditiis porro, voluptatibus, adipisci veritatis natus consequatur? Eveniet corporis nesciunt natus nostrum placeat beatae vel nihil. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste sequi cum ea repellendus hic, enim esse eveniet ut provident officiis, voluptatem quisquam expedita earum facilis iure minus sed officia aperiam.</p>
</div>
<!-- Card -->
<p class="h1 fw-semibold text-center mt-5">List Kelontong</p>
<div class="row">
    @foreach ($warungs as $warung)
    <div class="col-md-4 mt-5 mb-5">
        <div class="card">
            <img src="images/warungs/{{$warung['foto']}}.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$warung['nama_wrg']}}</h5>
                <p class="card-text">{{$warung['pemilik']}}</p>
            </div>
            <form action="{{route('login')}}" method="get">
            <div class="mb-5 d-flex justify-content-around">
                <button class="btn btn-dark">Detail Toko</button>
            </div>
        </form>
        </div>
    </div>
    @endforeach
</div>
@endsection