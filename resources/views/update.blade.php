@extends('index.index')
@section('container')
@include('navbar.navbar2')

<div class="card mt-3 mb-3 justify-content-center text-center w-50 m-auto">
    <div class="card-header bg-primary">
        <h3 class="fw-normal text-white mt-2  text-align-center">{{auth()->user()->first_name}}</h3>
    </div>
    <div class="card-body">
        <main class="form-registration w-75 m-auto">
            <form action="/updateuser/{{ $user_data->id }}" method="POST">
                @csrf
                <div class="mb-3">
                    <select id="" name="role_id" class="form-select">
                    <option value="">Select Role</option>
                    <option value="1">User</option>
                    <option value="2">Admin</option>
                    </select>
                    @error('role_name')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Save</button>
            </form>
          </main>
    </div>
  </div>


@endsection
