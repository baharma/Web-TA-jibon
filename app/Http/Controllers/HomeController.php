<?php

namespace App\Http\Controllers;

use App\Models\ApiRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    public function index(){
        return view('include.dasboard');
    }
    public function getIndex(Request $request){
        $data = $request->all();
        ApiRequest::create($data);


        return response()->json(['message' => 'API request created successfully']);

    }
    public function divacefirst(){
        $data = ApiRequest::where('device_id', 'aditya')
        ->latest('created_at')
        ->first();
        return response()->json($data);
    }

    public function divacesecond(){
        $data = ApiRequest::where('device_id', 'aditya2')
        ->latest('created_at')
        ->first();
        return response()->json($data);
    }

    public function divacethird(){
        $data = ApiRequest::where('device_id', 'aditya3')
        ->latest('created_at')
        ->first();
        return response()->json($data);
    }
    public function history(){
        $dataAll = ApiRequest::orderBy('created_at', 'desc')->paginate(20);
        $levels = ["LEVEL 1", "LEVEL 2", "LEVEL 3"];
        $level = ApiRequest::orderBy('created_at', 'desc')
        ->whereIn('status', $levels)
        ->paginate(10);
        return view('include.history',compact('dataAll','level'));
    }
}
