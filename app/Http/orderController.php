<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use Illuminate\Support\Facades\Validator;

class orderController extends Controller
{
    public function store(Request $request)
    {
      $validator=Validator::make($request->all(),
      [
        'nama_order' => 'required'
      ]
    );
    if($validator->fails()) {
      return Response()->json($validator->errors());
    }
    $simpan = order::create([
      'nama_order' => $request->nama_order
    ]);
    if($simpan) {
      return Response()->json(['status'=>1]);
    }
    else {
      return Response()->json(['status'=>0]);
    }

  }

}
