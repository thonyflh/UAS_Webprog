@extends('index.index')

@section('container')

@include('navbar.navbar2')

<div class="card mt-3 mb-3 justify-content-center text-center w-50 m-auto">
    <div class="card-header bg-primary">
        <h3 class="fw-normal text-white mt-2  text-align-center">Profile</h3>
    </div>
    <div class="card-body">
        <main class="form-registration w-75 m-auto">
            <form action="/profile" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="floatingInput" placeholder="First Name">
                    <label for="floatingInput">{{auth()->user()->first_name}}</label>
                    @error('first_name')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>

                <div class="form-floating">
                    <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="floatingInput" placeholder="Last Name">
                    <label for="floatingInput">{{auth()->user()->last_name}}</label>
                    @error('last_name')
                        <div class="invalid-feedback text-start mb=3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">{{auth()->user()->email}}</label>
                    @error('email')
                        <div class="invalid-feedback text-start mb=3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

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

                <div class="mb-3">
                    <select id="" name="gender_id" class="form-select">
                    <option value="">Select Gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                    </select>
                    @error('gender')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Confirm Password</label>
                    @error('confirm_password')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="hidden" name="role" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Name" value="User">
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Update</button>
            </form>
          </main>
    </div>
</div>

@endsection
