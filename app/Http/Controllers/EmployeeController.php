<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController as BaseController;
use App\Services\EmployeeService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends BaseController
{
    /**
     * @var $employeeService
     */
    protected $employeeService;

    /**
     * EmployeeController constructor
     *
     * @param EmployeeService $employeeService
     */
    public function __construct(EmployeeService $employeeService) {
        $this->employeeService = $employeeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\jsonResponse
     */
    public function index(Request $request)
    {

        try {
            $employee = $this->employeeService->getAll($request);
        } catch (Exception $e){
            return $this->sendError($e->getMessage(), []);
        }
        return $this->sendResponse($employee, __('employee.success.found'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\jsonResponse
     */
    public function store(Request $request)
    {
        try{
            $employee = $this->employeeService->store($request);
        } catch (Exception $e){
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($employee, __('employee.success.added'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\jsonResponse
     */
    /*public function show(Employee $employee)
    {
        //
    }*/

    public function show(Request $request, $id){
        try{
            $employee = $this->employeeService->show($request, $id);
        } catch (Exception $e){
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($employee, __('employee.success.found'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\jsonResponse
     */

    public function update(Request $request, $id)
    {
        try {
            $updated = $this->employeeService->update($request, $id);
        } catch(Exception $e) {
            return $this->sendError($e->getMessage());
        }

        if($updated === true)
            $updated = 'employee.success.updated';
        else
            $updated = 'employee.error.updated';
        return $this->sendResponse([], __($updated));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\jsonResponse
     */
    public function destroy(Request $request, $id)
    {
        try {
            $this->employeeService->destroy($request, $id);
        } catch(Exception $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse([], __('employee.success.deleted'));
    }
}
