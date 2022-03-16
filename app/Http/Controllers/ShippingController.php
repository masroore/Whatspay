<?php

namespace App\Http\Controllers;

use App\Services\ShippingService;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Exception;

class ShippingController extends BaseController
{
    /**
     * @var $shippingService
     */
    protected $shippingService;

    /**
     * Address service constructor
     *
     * @param ShippingService $shippingService
     */
    public function __construct(ShippingService $shippingService)
    {
        $this->shippingService = $shippingService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\jsonResponse
     */
    public function index(Request $request)
    {

        try {
            $shippings = $this->shippingService->getAll($request);
        } catch (Exception $e) {
            $this->sendError($e->getMessage());
        }

        return $this->sendResponse($shippings, __('store.success.shipping_added'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\jsonResponse
     */
    public function store(Request $request)
    {

        try {
            $shipping = $this->shippingService->store($request);
        } catch (Exception $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($shipping, __('store.success.shipping_added'));
    }

    /**
     * Display the specified resource.
     *
     * @param \Illuminate\Http\Request $request
     * @param  $id
     *
     * @return \Illuminate\Http\jsonResponse
     */
    public function show(Request $request, $id)
    {
        try {
            $shipping = $this->shippingService->show($request, $id);
        } catch (Exception $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($shipping, __('store.success.found'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Shipping $shipping
     * @return \Illuminate\Http\jsonResponse
     */
    public function update(Request $request, $id)
    {
        try {
            $shipping = $this->shippingService->update($request, $id);
        } catch (Exception $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($shipping, __('store.success.found'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Shipping $shipping
     * @return \Illuminate\Http\jsonResponse
     */
    public function destroy(Request $request, $id)
    {
        try {
            $this->shippingService->destroy($request, $id);
        } catch (Exception $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse([], __('store.success.found'));
    }
}
