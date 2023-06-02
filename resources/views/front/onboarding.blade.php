@extends('front.layouts.frontendOnboarding')

@section('content')
<!-- About Us -->
<div id="about">
<p class="h1 fw-semibold text-center mt-5">About Us</p>
<div class="subheading">
    <p class="text-center mt-5 mb-5">Kelontong merupakan website yang mengumpulkan dan menyediakan data tentang warung kelontong secara lengkap dan mudah untuk diakses.
        Dengan adanya kelontong pada distribusi barang ke warung kelontong dapat meningkatkan efisiensi dan efektivitasnya, dengan adanya 
        hal tersebut pastinya akan berdampak postif bagi perekonomian bersifat mikro dan makro yang ada di Indonesia, serta hal tersebut
        dapat meningkatkan daya saing bagi usah kecil dan menengah di sektor perdagangan.</p>
</div>
</div>
<!-- Card -->
<p class="h1 fw-semibold text-center mt-5">List Kelontong</p>
<div class="row">
    @foreach ($warungs as $warung)
    <div class="col-md-4 mt-5 mb-5">
        <div class="card">
            <img src="{{$warung['foto']}}" class="card-img-top" alt="...">
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