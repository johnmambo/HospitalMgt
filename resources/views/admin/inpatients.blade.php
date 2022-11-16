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
                    Patients
                </h5>
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">In Patients</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        all In-patients
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
                        <th>#</th>
                        <th>Name</th>
                        <th>Role_id</th>
                        <th>Email</th>
                        <th >Registered</th>
                        <th>Action</th>
                    </thead>
                    <tbody>

                        @foreach($users as  $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            

                            <td >
                                {{ $user->name }}
                            </td>
                            <td>{{ $user->user_type }}</td>
                            <td >
                                {{ $user->email }}
                            </td>
                            <td>
                            {{ $user->created_at }}
                            </td>
                            <td >
                                <span><a href="#"><button class="btn btn-info"
                                            data-toggle="click-ripple">Edit</button></a></span>
                                <span><a href="#"><button class="btn btn-dark"
                                            data-toggle="click-ripple">Suspend</button></a></span>
                                <span><a href="#"><button class="btn btn-danger"
                                            data-toggle="click-ripple">Delete</button></a></span>
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
            rowGroup: {
                dataSrc: 2
            }
        });
    });
</script>
@endsection