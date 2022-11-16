@extends('layouts.main')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/1.2.0/css/rowGroup.dataTables.min.css">
@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-0">
            <div class="flex-grow-0">
                <h5 class="h5 fw-bold mb-0">
                    Departments
                </h5>
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="{{ url('departments.adddepartment') }}"><button class="btn btn-primary"
                            data-toggle="click-ripple">Add Department</button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="block block-rounded">
    <div class="block-content block-content-full">
        <div class="row">
            <div class="col-lg-12">
                <table id="example"
                    class="table table-responsive table-md table-striped table-bordered table-vcenter fs-sm">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Created_at</th>
                            <th >Action</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @foreach ($departments  as $dep)
                        <tr>
                            <td>{{ $dep->id }}</td>
                            <td>{{ $dep->name }}</td>
                            <td>{{ $dep->description }}</td>
                            <td>{{ $dep->created_at }}</td>

                            <td>
                                <a href="{{ route('admin/departments/dep_edit', $dep->id) }}"><button class="btn btn-info"
                                            data-toggle="click-ripple">Edit</button></a>
                                <a href="#"><button class="btn btn-danger"
                                            data-toggle="click-ripple">Delete</button></a>
                            </td>
                        </tr>
                     
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
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
            // rowGroup: {
            //     dataSrc: 2
            // }
        });
    });
</script>
@endsection