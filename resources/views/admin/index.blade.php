@extends('layouts.main')

@section('content')

<div class="content ">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            All Users
          </h3>
        </div>
        <div class="block-content block-content-full">
          <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
          <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons fs-sm">
              <thead>
                  
                      <th class="text-center" style="width: 80px;">#</th>
                      <th>Name</th>
                      <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                      <th style="width: 15%;">Registered</th>
                  
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
                  </tr>
                  @endforeach
                 

              </tbody>
          </table>
      </div>
      </div>
</div>
@endsection