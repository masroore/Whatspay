<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Services\CardSessionService;
use Exception;
use Illuminate\Support\Facades\Auth;
use Psr\Log\InvalidArgumentException;

class CardSessionController extends BaseController
{
    /**
     * @var $cardSessionService
     */
    protected $cardSessionService;

    /**
     * CardSessionController constructor
     *
     * @param CardSessionService $cardSessionService
     */
    public function __construct(CardSessionService $cardSessionService){
        $this->cardSessionService = $cardSessionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\jsonResponse
     */
    public function index()
    {

        try {
            $response = $this->cardSessionService->getAll(Auth::user()->id);
        } catch (Exception $e){
            return $this->sendError($e->getMessage(), []);
        }

        return $this->sendResponse($response, __('cardsession.success.found'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

        try{
            $updated = $this->cardSessionService->update($request, $id);
        }catch (Exception $e){
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($updated, __('cardsession.success.change_default'));
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
            $deleted = $this->cardSessionService->destroy($id);
        } catch (Exception $e){
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($deleted, __('cardsession.success.deleted'));
    }
}
