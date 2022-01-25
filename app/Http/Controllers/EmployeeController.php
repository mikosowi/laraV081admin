<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    public function index()
    {
        //Begin Do the Eloquent Table ($employee = Employee::all();) the EMPLOYEE is from MODEL from app\Models\Employee.php  ==>>(class Employee extends Model)
            $employee = Employee::all();
        //End
        return view('pages.employee.index',compact('employee'));
    }

    public function create()
    {
        //Begin Do the Eloquent Table ($employee = Employee::all();) the EMPLOYEE is from MODEL from app\Models\Employee.php  ==>>(class Employee extends Model)
         //   $employee = Employee::all();
        //End
        return view('pages.employee.create'); // Another Blade file to be created
    }
    public function store(Request $request)
    {
        //Begin Do the Eloquent Table ($employee = Employee::all();) the EMPLOYEE is from MODEL from app\Models\Employee.php  ==>>(class Employee extends Model)
            $employee = new Employee;
            $employee->name = $request->input('name');
            $employee->email = $request->input('email');
            $employee->phone = $request->input('phone');
            $employee->designation = $request->input('designation');
            $employee->save();
        //End
        return redirect('employee')->with('status','Employee Added Successfully');

        //return view('pages.employee.index',compact('employee'));
    }
    public function edit($id)
    {
        //Eloquent Model: Employee: app\Models\Employee.php
        $employee = Employee::find($id);
        return view('pages.employee.edit',compact('employee'));

    }
    
    public function update (Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->designation = $request->input('designation');
        $employee->status = $request->input('status') == true ? '1':'0';
        $employee->update();
        return redirect('employee')->with('status','Employee data updated successfully');
        
    }

    public function delete ($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('employee')->with('status','Employee data deleted successfully');
    }
}
