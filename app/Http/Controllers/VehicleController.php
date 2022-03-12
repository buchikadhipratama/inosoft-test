<?php

namespace App\Http\Controllers;

use App\Service\VehicleService;
use App\Models\Vehicle;
use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use Database\Seeders\VehicleSeeder;
use Illuminate\Http\Request;

class VehicleController extends Controller
{

    public function index()
    {
        $response = (new VehicleService)->getAllVehicle();
        // return view ('report', compact('response'));
        return $response; //for api

    }

    public function stock()
    {
        $response = (new VehicleService)->remainingStock();
        // return view('stock', compact('response'));
        return $response; //for api
    }

    public function sold()
    {
        $response = (new VehicleService)->vehicleSold();
        // return view('stock', compact('response'));
        return $response; //for api
    }

    public function sales()
    {
        $response = (new VehicleService)->RemainingStock();
        // return view('sales', compact('response'));
        return $response; //for api
    }

    public function update(Request $request)
    {
        // dd($request);
        $data = Vehicle::find($request->id);
        $data->status=2;
        $data->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $data = Vehicle::find($id);

        return response()->json(['data'=>$data]);
    }

}
