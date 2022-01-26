<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = DB::table('employees')
            ->join('companies', 'employees.company_id', '=', 'companies.id')
            ->select('employees.*', 'companies.name', 'companies.logo')
            ->where('employees.deleted', 0)
            ->paginate(10);

        $card = "List Employees";
        $count = 1;
        $crumb = "List employee";
        return view("admin.employee.index", ['employees' => $employees, 'count' => $count, 'crumb' => $crumb, 'card' => $card]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $card = "Create Employee";
        $crumb = "Create employees";
        $companies = Company::all();

        return view("admin.employee.create", [
            'crumb' => $crumb, 
            'card' => $card,
            'companies' => $companies
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmployeeRequest $request)
    {

        $input = $request->all();

        $employee = new Employee();
        $employee->first_name = $input['first_name'];
        $employee->last_name = $input['last_name'];
        $employee->company_id = $input['company_id'];
        $employee->email = $input['email'];
        $employee->phone_number = $input['phone_number'];
        $employee->save();

        return redirect()->route('create-employee')->with('message', 'Employee created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = DB::table('employees')
            ->join('companies', 'employees.company_id', '=', 'companies.id')
            ->select('employees.*', 'companies.name', 'companies.logo')
            ->where('employees.id', $id)
            ->first();

        $crumb = 'View people';
        $card = 'View Employee';

        return view('admin.employee.show', [
            'employee' => $employee, 
            'crumb' => $crumb, 
            'card' => $card
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = DB::table('employees')
            ->join('companies', 'employees.company_id', '=', 'companies.id')
            ->select('employees.*', 'companies.name', 'companies.logo')
            ->where('employees.id', $id)
            ->first();

        $companies = Company::where('deleted', 0)->get();

        $crumb = 'Edit Employee';
        $card = 'Edit employee';

        return view('admin.employee.edit', [
            'employee' => $employee, 
            'crumb' => $crumb, 
            'card' => $card,
            'companies' => $companies,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest $request)
    {
        
        $input = $request->all();

        $employee = Employee::find($input['id']);
        $employee->first_name = $input['first_name'];
        $employee->last_name = $input['last_name'];
        $employee->company_id = $input['company_id'];
        $employee->email = $input['email'];
        $employee->phone_number = $input['phone_number'];
        $employee->save();

        return redirect('employee/edit/' . $employee->id)->with('message', 'Employee updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //soft delete
        $employee = Employee::find($id);
        $employee->deleted = 1;
        $employee->save();

        return redirect()->route('employee')->with('message', 'Company deleted successfully!');
    }
}
