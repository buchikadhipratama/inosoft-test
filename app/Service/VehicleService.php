<?php

namespace App\Service;

use App\Models\Vehicle;
use App\Repository\VehicleRepository;

use MongoDB\BSON\ObjectID;

class VehicleService{
    public function GetAllVehicle()
    {
        return (new VehicleRepository)->getAll();
    }

    public function RemainingStock()
    {
        return (new VehicleRepository)->getStock();
    }

    public function Motor()
    {
        return (new VehicleRepository)->getMotorStock();
    }

    public function Mobil()
    {
        return (new VehicleRepository)->getMobilStock();
    }

    public function VehicleSold()
    {
        return (new VehicleRepository)->getVehicleSold();
    }
}
