@extends('layouts.main')

@section('container')
  <h1>Customer Page</h1>
  
  <div class="card" style="margin:20px;">
    <div class="card-header">Create New Customer</div>
    <div class="card-body">
      <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data"> 
          @csrf
          <label>Nama</label></br>
          <input type="text" name="nama_customer" id="nama_customer" class="form-control"></br>
          @error('nama_customer')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
          @enderror
          <label>Alamat</label></br>
          <input type="text" name="alamat_customer" id="alamat_customer" class="form-control"></br>
          @error('alamat_customer')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
          @enderror
          <label>No Hp</label></br>
          <input type="text" name="no_tlp_customer" id="no_tlp_customer" class="form-control"></br>
           @error('no_tlp_customer')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
          @enderror
          <label>Tgl Registrasi</label>
          <input name= "tgl_regis_customer" id="tgl_regis_customer" class="form-control" type="date" />
           @error('tgl_regis_customer')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
          @enderror
          <input type="submit" value="Save" class="btn btn-success"></br>
      </form>
      
    </div>
  </div>

@endsection

