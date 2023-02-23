<?php

namespace App\Http\Controllers\Analyst;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Traits\Response;

class EmployeeController extends Controller
{
    use Response;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $employees = Employee::all();
            
        } catch (\Exception $e) {
            $this->reportError($e);
            return response()->json($this->serverError());
        }
        return response()->json($this->success($employees, 'employees'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $employee = Employee::create($request->all());
            
        } catch (\Exception $e) {
            $this->reportError($e);
            return response()->json($this->serverError());
        }
        return response()->json($this->success($employee, 'employee'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $employee = Employee::find($id);
            
        } catch (\Exception $e) {
            $this->reportError($e);
            return response()->json($this->serverError());
        }
        return response()->json($this->success($employee, 'employee'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $employee = Employee::find($id);
            if (!empty($employee)) {
                $employee->update($request->all());
            }
            
        } catch (\Exception $e) {
            $this->reportError($e);
            return response()->json($this->serverError());
        }
        return response()->json($this->success($employee, 'employee'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $employee = Employee::find($id);
            if (!empty($employee)) {
                $employee->delete();
            }
        } catch (\Exception $e) {
            $this->reportError($e);
            return response()->json($this->serverError());
        }
        return response()->json($this->success($employee, 'employee'));
    }
}
