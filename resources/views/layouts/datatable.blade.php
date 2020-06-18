@extends('layouts.app')
@section('additionalStyles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    @yield('evenMoreStyles')
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">@yield('tableTitle') Details</h3><a class="btn btn-primary btn-sm" href="@yield('createRoute')">Add new</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="tb1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            @yield('tableHead')
                        </tr>
                        </thead>
                        <tbody>
                            @yield('tableBody')
                        </tbody>
                        <tfoot>
                        <tr>
                            @yield('tableHead')
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@section('additionalScripts')
    <!-- DataTables -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script>
        $(function () {
           var t= $("#tb1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        });
    </script>

    <script>
        function confirmation(i){
            if(confirm('are you sure?')){
                let form_name='delete-form-'+i;
                document.getElementById(form_name).submit();
            }else{
                return false;
            }
        }
    </script>
    @yield('evenMoreScripts')
@endsection