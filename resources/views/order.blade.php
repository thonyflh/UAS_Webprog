@extends('index.index')

@section('container')

@include('navbar.navbar2')

<div class="d-flex justify-content-center flex-column align-items-center">
    <div class="d-none"> {{$i = 0}}</div>
        @foreach ($order_data as $data )

        <div class="d-flex mb-5">
            <div>
                <img src="{{asset('storage/image/' . $data->item->image)}}" alt="" style="height: 200px" width="300px">
            </div>

            <div class="ms-5">
                <div style="width: 500px;
                text-overflow: ellipsis;
                white-space:nowrap;
                overflow:hidden"><h4>{{$data->item->item_name}}</h2></div>
                <div> <p>Price : {{$data->item->price}}</p> </div>
                <div class="d-none">{{$i += $data->item->price}} </div>
            </div>

            <form action="/order/delete/{{Auth::User()->id}}/{{$data->item->id}}" method="POST">
                @csrf
                @method('delete')
                <div class="ms-5">
                    <button type="submit" class="btn btn-outline-warning">Delete</button>
                 </div>
            </form>
        </div>
        @endforeach
</div>


<div class="d-flex justify-content-center p-3 bg-light text-dark align-items-center">
    <div>
        Total Price: IDR {{$i}}
    </div>

    <div class="ms-5">
    <form action="/purchase/{{Auth::user()->id}}" method="POST">
    @csrf
    <button type="submit">Purchase</button>
    </form>
    </div>
</div>

@endsection
