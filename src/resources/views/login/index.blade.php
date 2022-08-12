@extends('layouts.main')

@section('container')
  <h1>Login Page</h1>
  
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissable fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> 
      </button>
    </div>
    @endif

    @if(session()->has('LoginError'))
    <div class="alert alert-danger alert-dismissable fade show" role="alert">
      {{ session('LoginError') }}
      <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close" > 
      </button>
    </div>
    @endif



  <div class="card">



    <div class="card-header">Login</div>
    <div class="card-body">
      <form action="/login" method="POST" enctype="multipart/form-data"> 
          @csrf
          <label>Email</label></br>
          <input type="text" name="email" id="email" class="form-control" autofocus required></br>
          @error('email')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
          @enderror
          <label>Password</label></br>
          <input type="password" name="password" id="password" class="form-control" required></br>
          @error('password')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
          @enderror
         <input type="submit" value="Login" class="btn btn-primary"></br>
      </form>
      
    </div>
  </div>


@endsection
