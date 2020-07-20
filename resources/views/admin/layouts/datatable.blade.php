@extends('admin.layouts.app')
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
                        <h3 class="card-title">@yield('tableTitle') Details</h3><div class="d-flex justify-content-between">
                            <a class="btn btn-primary btn-sm mr-2" href="@yield('createRoute')">Add new</a>
                            <form action="" method="post" id="bulk_form">
                                <input type="hidden" name="_method" value="get">
                                <input type="hidden" name="ids" value="" id="ids">
                                <button type="submit" class="btn btn-danger btn-sm" id="bulk_delete"><small>
                                        Delete</small></button>
                            </form>
                        </div>
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

    <script type="text/javascript">
        $('#bulk_delete').click(function () {

            var ids=[];
            var token = $("meta[name='csrf-token']").attr("content");
            $('#bulk_chk:checked').each(function () {
                ids.push($(this).val());

            })
            if(ids.length > 0) {
                if (confirm("Are you sure you want to delete selected items?")) {

                    $('#ids').val(ids);
                    $('#bulk_form').attr('action', function (i, value) {
                        return "bulkDelete/" + ids;
                    });
                    //$('#bulk_form').attr('action','bulkDelete/'+ids);
                }
            }
            else{
                $('#bulk_form').attr('action','')
                alert('Please select atleast one checkbox');
            }


        });
    </script>
    @yield('evenMoreScripts')
@endsection
