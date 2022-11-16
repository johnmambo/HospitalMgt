@extends('layouts.main')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/1.2.0/css/rowGroup.dataTables.min.css">
@section('content')

<div class="content ">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                All Doctors <small></small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons fs-sm">
                <thead>
                    
                        <th class="text-center" style="width: 80px;">#</th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Email</th>
                        <th style="width: 15%;">Registered</th>
                        <th class="text-center">Action</th>
                    
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                    <tr>
                        <td class="text-center">{{ ++$key }}</td>
                        <td class="fw-semibold">
                            <a href="javascript:void(0)">{{ $user->name }}</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{ $user->email }}
                        </td>
                        <td>
                            <em class="text-muted">{{ $user->created_at }}</em>
                        </td>
                        <td class="text-center">
                            <span><a href="#"><button  class="btn btn-info" data-toggle="click-ripple">Edit</button></a></span>
                            <span><a href="#"><button  class="btn btn-dark" data-toggle="click-ripple">Suspend</button></a></span>
                            <span><a href="#"><button  class="btn btn-danger" data-toggle="click-ripple">Delete</button></a></span>
                        </td>
                    </tr>
                    @endforeach
                   

                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/rowgroup/1.2.0/js/dataTables.rowGroup.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true,
            order: [
                [2, 'asc']
            ],
            rowGroup: {
                dataSrc: 2
            }
        });
    });
</script>
@endsection