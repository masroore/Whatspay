<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController as BaseController;
use App\Services\SizeChartService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SizeChartController extends BaseController
{
    /**
     * @var $sizeChartService
     */
    protected $sizeChartService;

    /**
     * SiseChartController constructor
     *
     * @param SizeChartService $sizeChartService
     */
    public function __construct(SizeChartService $sizeChartService){
        $this->sizeChartService = $sizeChartService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\jsonResponse
     */
    public function index(Request $request)
    {
        try {
            $get_data = $this->sizeChartService->getAll($request);
            if($get_data)
                return $this->sendResponse([$get_data], __('sizechart.success.found'));
            else
                return $this->sendError(__('sizechart.error.found'), []);

        } catch (Exception $e){
            return $this->sendError($e->getMessage(), []);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\jsonResponse
     */
    public function store(Request $request)
    {
        try {

            $size_chart = $this->sizeChartService->store($request);
            if($size_chart)
                return $this->sendResponse([], __('sizechart.success.added'));
            else
                return $this->sendError(__('sizechart.error.added'));

        } catch (Exception $e){
            return $this->sendError($e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\jsonResponse
     */
    public function show(Request $request, $id)
    {
        try{
            $get_data = $this->sizeChartService->show($request, $id);
            if($get_data === true)
                return $this->sendResponse([], __('sizechart.success.found'));
            else
                return $this->sendError(__('sizechart.error.found'));

        } catch (Exception $e){
            return $this->sendError($e->getMessage());
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\jsonResponse
     */
    public function update(Request $request, $id)
    {

        try {
            $updated = $this->sizeChartService->update($request, $id);
            if($updated === true)
                return $this->sendResponse([], __('sizechart.success.updated'));
            else
                return $this->sendError(__('sizechart.error.updated'));

        } catch(Exception $e) {
            return $this->sendError($e->getMessage());
        }

    }

    /**
     * Change status of the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\jsonResponse
     */
    public function changeStatus(Request $request, $id)
    {

        try {
            $updated = $this->sizeChartService->changeStatus($request, $id);
            if($updated === true)
                return $this->sendResponse([], __('sizechart.success.status'));
            else
                return $this->sendError(__('sizechart.error.status'));

        } catch(Exception $e) {
            return $this->sendError($e->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\jsonResponse
     */
    public function destroy($id)
    {
        try {
            $deleted = $this->sizeChartService->destroy($id);

            if($deleted === true)
                return $this->sendResponse([], __('sizechart.success.deleted'));
            else
                return $this->sendError(__('sizechart.error.deleted'));
        } catch(Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }
}
