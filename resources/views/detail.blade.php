@extends('index.index')

@section('container')

@include('navbar.navbar2')

<style>
    .detail{
        margin-top: 70px;
        margin-bottom: 70px;
        display: flex;
        gap: 2rem;
    }
    .desc{
        border-style: solid;
        padding: 110px;
    }
    .details1{
        display: flex;
        justify-content: space-between;
        gap: 3rem;
    }
    .details2, .details3{
        display: flex;
        gap: 4rem;
    }
</style>

<div class="container">
    <body>
        <div class="detail">
            <div class="image_detail">
                <img src="{{asset('storage/image/' . $data->image)}}"  alt="..." style="height:400px" width="400px">
            </div>
            <div class="desc">
                <h2 style="font-weight: bold">{{$data->item_name}}</h2>
                <div class="details1">
                    <h6 class="detail1">Detail</h6>
                    <p class="desc1">{{$data->item_desc}}</p>
                </div>
                <div class="details2">
                    <h6 class="price">price</h6>
                    <p class="harga">IDR. {{$data->price}}</p>
                </div>
                <form action="/order/{{Auth::user()->id}}/{{$data->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <br>
                    <button type="submit">Purchase</button>
                </form>
            </div>
        </div>
    </body>
</div>

@endsection
