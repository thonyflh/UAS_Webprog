@extends('index.index')

@section('container')

@include('navbar.navbar2')

<style>
    .tabel{
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 80vh;
    }
    .table{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>

<div class="tabel ">
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Account</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($user_data as $data )
      <tr>
        <td>{{$data->first_name}} - {{$data->role_id}}</td>
        <td>
            <a href="/update/{{ $data->id }}" type="button" class="btn btn-outline-warning">update</a>
            <a href="/delete/{{ $data->id }}" class="btn btn-outline-danger">delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
