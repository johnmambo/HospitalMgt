<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;
use auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function checkauth()
    {
        $user = auth()->user();
        return $user;
    }
    public function adminindex()
    {

        $users = User::all();
        return view('admin.index')->with('users', $users);
    }
    public function admindash()
    {

        return view('admin.dashboard');
    }

    public function admindoctors()
    {

        $users = User::all();
        return view('admin.doctors')->with('users', $users);
        // return view('admin.doctors');
    }
    public function inpatients()
    {

        $users = User::all();
        return view('admin.inpatients')->with('users', $users);
        // return view('admin.inpatients');
    }
    public function allusers()
    {
        $users = User::all();
        return view('admin.allusers')->with('users', $users);

    }

    public function departments()
    {
        $departments = Department::all();
        return view('admin.departments.departments')->with('departments', $departments);
    }
    public function adddepartment()
    {

        return view('admin.departments.adddepartment');
    }

    public function storedepartment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',

        ]);

        $departments = new Department;
        $departments->name = $request->name;
        $departments->description = $request->description;
        $departments->save();
        return redirect()->route('admin.departments.departments')
            ->with('success', 'Department has been created successfully.');
    }

    // public function show(Department $department)
    // {
    //     return view('departments.show', compact('department'));
    // }

    public function editdepartment($id)
    {
        $departments = Department::find($id);
        return view('admin.departments.dep_edit')->with('departments', $departments);

    }
    public function updatedepartment(Request $request, $id ){
        $request->validate([
            'name' => 'required',
            'description' => 'required',

        ]);
        $d = Department::find($id);
        $d->name = $request->name;
        $d->description = $request->description;
        $d->update();
        return redirect()->route('admin.departments')
        ->with('success', 'Department has been created successfully.');

    }
}
