<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use Illuminate\Support\Facades\Validator;

class productController extends Controller
{
  public function store(Request $request)
  {
    $validator=Validator::make($request->all(),
    [
      'nama_product' => 'required'
    ]
  );
    if($validator->fails()) {
    return Response()->json($validator->errors());
  }
    $simpan = product::create([
    'nama_product' => $request->nama_product
  ]);
  if($simpan) {
    return Response()->json(['status'=>1]);
  }
  else {
    return Response()->json(['status'=>0]);
    }

  }

}
