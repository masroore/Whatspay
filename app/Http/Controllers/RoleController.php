<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController as BaseController;
use App\Models\Role;
use App\Services\AttributeSetService;
use App\Services\RoleService;
//use Exception;
use Illuminate\Http\Request;

class RoleController extends BaseController
{

    protected $roleService;

    public function __construct(RoleService $roleService) {
        $this->roleService = $roleService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\jsonResponse
     */
    public function index(Request $request)
    {
//        dd($request->all());
        try {
            $roles = $this->roleService->index($request);
        } catch(Exception $e) {
            return $this->sendError($e->getMessage());
        }
        return $this->sendResponse($roles, 'Data found.');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        try {
            $role = $this->roleService->store($request);
        } catch(Exception $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($role, 'Role set created.');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
//        dd($id);
        try {
            $role = $this->roleService->show($id);
        } catch(Exception $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($role, 'Data found.');    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
//        dd($request->input());
        try {
            $roleService = $this->roleService->update($request, $id);
        } catch(Exception $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($roleService, 'Role updated successfully.');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        try {
            $this->roleService->destroy($id);
        } catch(Exception $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse([], 'Role deleted Successfully.');
    }
}
