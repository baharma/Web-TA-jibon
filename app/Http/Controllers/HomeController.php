<?php

namespace App\Http\Controllers;

use App\Models\ApiRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    public function index(){
        return view('layout.apps');
    }
    public function getIndex(Request $request){
        $data = $request->all();
        ApiRequest::create($data);


        return response()->json(['message' => 'API request created successfully']);

    }
}
