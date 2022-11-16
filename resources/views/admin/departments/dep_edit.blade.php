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
                    Edit Department
                </h5>
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="#"><button class="btn btn-primary"
                            data-toggle="click-ripple">Back</button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="block-content block-content-full">
    <div class="row">

        <div class="col-lg-12">
            <!-- Form Inline - Default Style -->
            <form class="row justify-content-center g-3 " action="{{ route('admin.departments.update') }}" method="POST">
                @csrf
                <div class="col-md-8 m-2">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" id="val-username" name="name" value="{{ $departments->name }}" >
                </div>
                <div class="col-md-8 m-2">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" id="val-description" name="description" value="{{ $departments->description }}">
                </div>


                <div class="d-flex justify-content-center m-2">
                    <button class="btn  btn-alt-primary" type="submit">save</button>
                </div>

            </form>

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
                // ],
                // rowGroup: {
                //     dataSrc: 2
                // }
            });
        });
    </script>

@endsection