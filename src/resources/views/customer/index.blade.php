@extends('layouts.main')

@section('container')
  <h1>Customer Page</h1>
  <div class="row" style="margin:20px;">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('/customer/create') }}" class="btn btn-success btn-sm" title="Add New customer">
                    Add New
                </a>
                <br/>
                <br/>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Hp</th>
                                <th>Tgl Registrasi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($customer as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->no_tlp }}</td>
                                <td>{{ $item->tgl_regis }}</td>

                                <td>
                                    <a href="{{ url('/customer/' . $item->id . '/edit') }}" title="Edit Customer"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('customer.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE') 
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Customer" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
  </div> 

@endsection

