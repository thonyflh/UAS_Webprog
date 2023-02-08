@extends('index.index')

@section('container')

<style>
#main {
  height: 80vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
#main div {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>

<div id="main">
    <div>
        <h1>Find and Buy Your Grocery Here</h1>
    </div>
</div>

@endsection
