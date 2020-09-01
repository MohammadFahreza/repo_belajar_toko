<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use Illuminate\Support\Facades\Validator;

class customerController extends Controller
{
  public function store(Request $request)
  {
    $validator=Validator::make($request->all(),
    [
      'nama_customer' => 'required',
      'tanggal_lahir' => 'required',
      'gender' => 'required',
      'alamat' => 'required',
      'id_customer' => 'required'
    ]
  );
  if($validator->fails()) {
    return Response()->json($validator->errors());
  }public function store(Request $request)
    {
      $validator=Validator::make($request->all(),
      [
        'nama_customer' => 'required',
        'tanggal_lahir' => 'required',
        'gender' => 'required',
        'alamat' => 'required',
        'id_customer' => 'required'
      ]
    );
    if($validator->fails()) {
      return Response()->json($validator->errors());
    }
    $simpan = customer::create([
      'nama_customer' => $request->nama_customer,
      'tanggal_lahir' => $request->tanggal_lahir,
      'gender' => $request->gender,
      'alamat' => $request->alamat,
      'id_customer' => $request->id_customer
    ]);
    if($simpan)
    {
      return Response()->json(['status' => 1]);
    }
    else
    {
      return Response()->json(['status' => 0]);
    }
  }
}
