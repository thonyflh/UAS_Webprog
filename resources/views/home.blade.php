@extends('index.index')

@section('container')

@include('navbar.navbar2')

<style>
ul.pagination {
    display: flex;
    justify-content: center;
}
.row{
    align-items: center;
    text-align: center;
}
</style>

<div class="container">
    <div class="row row-cols-5">
        @foreach ($item_data as $data )
            <div class="card" style="height: 300px" >
                <img src="{{asset('storage/image/' . $data->image)}}" class="card-img-top" alt="..." style="height: 200px" width="200px">
                <div class="card-body text-decoration-none text-dark">
                    <h5 class="card-title">{{$data->item_name}}</h5>
                    <a href="/detail/{{$data->id}}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{$item_data->links()}}
@endsection
