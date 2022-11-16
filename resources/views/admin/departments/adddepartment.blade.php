@extends('layouts.main')

@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-0">
            <div class="flex-grow-0">
                <h5 class="h5 fw-bold mb-0">
                    Add Department
                </h5>
            </div>

        </div>
    </div>
</div>
<div class="block-content block-content-full">
    <div class="row">

        <div class="col-lg-12">
            <!-- Form Inline - Default Style -->
            <form class="row justify-content-center g-3 " action="{{ route('admin.storedepartment') }}" method="POST">
                @csrf
                <div class="col-md-8 m-2">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" id="val-username" name="name"
                        placeholder="Enter department name..">
                </div>
                <div class="col-md-8 m-2">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" id="val-description" name="description"
                        placeholder="Enter Description..">
                </div>


                <div class="d-flex justify-content-center m-2">
                    <button class="btn  btn-alt-primary" type="submit">save</button>
                </div>

            </form>

        </div>
    </div>
</div>


@endsection