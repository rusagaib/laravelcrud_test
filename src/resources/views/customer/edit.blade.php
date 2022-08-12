@extends('layouts.main')

@section('container') 
  <div class="row">
      <div class="col-md-12">
          <div class="card border-0 shadow rounded">
              <div class="card-body">
                  <form action="{{ route('customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')

                      <div class="form-group">
                          <label class="font-weight-bold">Nama</label>
                          <input type="text" class="form-control @error('nama_customer') is-invalid @enderror" name="nama_customer" value="{{ old('nama_customer', $customer->nama) }}" placeholder="Masukkan Nama">
                      
                          <!-- error message untuk title -->
                          @error('nama_customer')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>

                      <div class="form-group">
                          <label class="font-weight-bold">Alamat</label>
                          <textarea class="form-control @error('alamat_customer') is-invalid @enderror" name="alamat_customer" rows="5" placeholder="Masukkan Alamat">{{ old('alamat_customer', $customer->alamat) }}</textarea>
                      
                          <!-- error message untuk content -->
                          @error('alamat_customer')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>

                      <div class="form-group">
                          <label class="font-weight-bold">No Tlp</label>
                          <input class="form-control @error('no_tlp_customer') is-invalid @enderror" name="no_tlp_customer" placeholder="Masukkan no tlp)" value="{{ old('no_tlp_customer', $customer->no_tlp) }}">
                      
                          <!-- error message untuk content -->
                          @error('no_tlp_customer')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>

                      <div class="form-group">
                          <label class="font-weight-bold">Tgl Registrasi : {{ old('tgl_regis_customer', $customer->tgl_regis) }} </label>
                          <input class="form-control @error('tgl_regis_customer') is-invalid @enderror" name="tgl_regis_customer" placeholder="Masukkan tgl registrasi" type="date" value="{{ old('tgl_regis_customer', $customer->tgl_regis) }}"> 
                      
                          <!-- error message untuk content -->
                          @error('tgl_regis_customer')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>


                      <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                      <button type="reset" class="btn btn-md btn-warning">RESET</button>

                  </form> 
              </div>
          </div>
      </div>
  </div>
@endsection
