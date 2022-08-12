<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    /* 
      $data['customer'] = Customer::orderBy('id','desc')->paginate(5);
      return view('customer.index', [
        "title" => "Customers",
        "customers" => $data,
      ]);
      */
    $data = Customer::all();
    return view('customer.index', [
      "title" => "Customers",
    ])->with('customer', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('customer.create', [
      "title" => "Customers",
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'nama_customer' => 'required',
      'alamat_customer' => 'required',
      'no_tlp_customer' => 'required',
      'tgl_regis_customer' => 'required',
    ]);

    Customer::create([
      'nama' => $request->nama_customer,
      'alamat' => $request->alamat_customer,
      'no_tlp' => $request->no_tlp_customer,
      'tgl_regis' => $request->tgl_regis_customer,
    ]);

    return redirect()->route('customer.index')
      ->with('msg', 'berhasil menambahkan data customer');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $customer = Customer::find($id);
    return view('customer', [
      "title" => "Customers",
    ])->with('customer', $customer);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $customer = Customer::find($id);
    return view('customer.edit', [
      "title" => "Customers",
    ])->with('customer', $customer);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $customer = Customer::find($id);

    $data_validate = $request->validate([
      'nama_customer' => 'required',
      'alamat_customer' => 'required',
      'no_tlp_customer' => 'required',
      'tgl_regis_customer' => 'required',
    ]);

    /*
        $data_validate['user_id'] = auth()->user()->id;
        */

    $customer = new Customer;
    $customer->update($data_validate);

    return redirect('customer')
      ->with('msg', 'berhasil menambahkan data customer');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Customer::destroy($id);
    return redirect('customer')->with('msg', 'Customer dihapus');
  }
}
