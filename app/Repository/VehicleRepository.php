<?php

namespace App\Repository;

use App\Models\Vehicle;

class VehicleRepository
{
    public function GetAll()
    {
        return Vehicle::where(function ($query){
            $query->where('status',2); //2= sold
        })->get();
    }

    public function GetStock()
    {
        return Vehicle::where(function ($query){
            $query->where('status',1); //1=stock, 2=sold
        })->get();
    }

    public function GetMotorStock()
    {
        return Vehicle::where(function ($query){
            $query->where('vehicle_id',1)->where('status',1); //1=stock, 2=sold
        })->get();
    }

    public function GetMobilStock()
    {
        return Vehicle::where(function ($query){
            $query->where('vehicle_id',1); //1=stock, 2=sold
        })->get();
    }

    public function GetVehicleSold()
    {
        return Vehicle::where(function ($query){
            $query->where('vehicle_id',2); //1=stock, 2=sold
        })->get();
    }
}
