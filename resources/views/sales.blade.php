@extends('layout')
@section('title','Sales')
@section('menu','Dashboard')
@section('submenu','Sales')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row">
                @foreach ( $response as $r )

                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            @if ($r->vehicle_id==1)
                            Motorcycle
                            @else
                            Car
                            @endif
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><span style="text-transform:uppercase"><b>{{ $r->name_id }}</b></span></h2>
                                    <p class="text-muted text-sm mb-0"><b>About: </b> {{ $r->suspensi }}{{ $r->kapasitas }} / {{ $r->kendaraan['warna'] }} / {{ $r->transmisi }}{{ $r->tipe }} </p>
                                    <ul class="ml-0 mb-0 fa-ul text-muted">
                                        <li>
                                            Engine: {{ $r->mesin }}
                                        </li>
                                        <li>
                                            Year : {{ $r->mesin }}
                                        </li>
                                        <li>
                                            id : {{ $r->_id }}
                                        </li>
                                        <li>
                                            <h4><b>Rp. {{ $r->kendaraan['harga'] }}</b></h4>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <button type="button" class="btn btn-info" onclick="editData('{{ $r->_id }}')" data-id="{{ $r->_id }}" data-toggle="modal" data-target="#modal-{{ $r->_id }}">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>




    <!-- Modal -->
    {{-- @foreach ($response as $r) --}}
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Purchase Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('sales.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="vehicle_id" name="id">
                        <div class="modal-body">
                            Are you sure you want to buy this vehicle?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create PO</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}

        <!-- /.content -->
</section>

<script>
    function editData(id){
        var url = '/sales/edit/'+id
        console.log(url)
        $.ajax({
            url: url,
            method : 'GET',
            success : function(response){
                $('#vehicle_id').val(response.data['_id']);
                console.log(response);
                $('#modalEdit').modal('show');
            }
        })
    }
    $(document).ready(function(){
        $('#sales').addClass('active')
    })
</script>
</div>
<!-- /.content-wrapper -->
@endsection
