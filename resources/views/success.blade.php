@extends('index.index')

@section('container')

<style>
.contain{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 80vh;
}
</style>

<div class="contain">
    <h1>Saved!</h1>
    <a href="/home">Click here to "Home"</a>
</div>

@endsection
