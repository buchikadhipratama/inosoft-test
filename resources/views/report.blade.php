@extends('layout')
@section('title','Sales Report')
@section('menu','Dashboard')
@section('submenu','Sales Report')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-4 col-12">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $response->count() }}</h3>
                        <p>Vehicle Sold</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-down"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-12">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $response->where('vehicle_id',1)->count() }}</h3>
                        <p>Motorcycle Sold</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-down"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-12">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $response->where('vehicle_id',2)->count() }}</h3>
                        <p>Car Sold</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-down"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with minimal features & hover style</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Type of Vehicle</th>
                                    <th>Vehicle Name</th>
                                    <th>Engine Capacity</th>
                                    <th>Passenger Capacity</th>
                                    <th>Vehicle Category</th>
                                    <th>Suspension</th>
                                    <th>Transmission</th>
                                    <th>Year</th>
                                    <th>Color</th>
                                    <th>Price</th>
                                    <th>Transaction</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($response as $r)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($r->vehicle_id==1)
                                        Motorcycle
                                        @else
                                        Car
                                        @endif
                                    </td>
                                    <td>{{ $r->name_id }}</td>
                                    <td>{{ $r->mesin }}</td>
                                    <td>
                                        @if ($r->kapasitas==null)
                                        -
                                        @else
                                        {{ $r->kapasitas }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($r->tipe==null)
                                        -
                                        @else
                                        {{ $r->tipe }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($r->suspensi==null)
                                        -
                                        @else
                                        {{ $r->suspensi }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($r->transmisi==null)
                                        -
                                        @else
                                        {{ $r->transmisi }}
                                        @endif
                                    </td>
                                    <td>{{ $r->kendaraan['tahun'] }}</td>
                                    <td>{{ $r->kendaraan['warna'] }}</td>
                                    <td>{{ $r->kendaraan['harga'] }}</td>
                                    <td>{{ $r->updated_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
