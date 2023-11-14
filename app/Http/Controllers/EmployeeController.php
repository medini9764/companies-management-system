<?php

namespace App\Http\Controllers;

use App\Http\Requests\company\UpdateCompanyRequest;
use App\Http\Requests\employee\StoreEmployeeRequest;
use App\Http\Requests\employee\UpdateEmployeeRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::paginate(10);
        return view("pages.employee.index",compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        return view("pages.employee.create",['companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $data = $request->validated(); // Get validated input data
        Employee::create($data );

        return back()->with('success','You have successfully added employee details.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id);
        $companies = Company::all();
        return view("pages.employee.edit",compact('employee','companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, string $id)
    {
        $data = $request->validated();// Get validated input data
        Log::debug($request);
        $employee = Employee::findOrFail($id);
        $employee->update($data);
        return back()->with('success','You have successfully updated employee details.');
    }
   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::destroy($id);
        return back();
    }
}
