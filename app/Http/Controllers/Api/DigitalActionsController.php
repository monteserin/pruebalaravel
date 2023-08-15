<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BrandsDigitalActions;
use App\Models\DigitalActions;
use Illuminate\Http\Request;

class DigitalActionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $digitalActions = DigitalActions::get();
        return response()->json($digitalActions);
    }

    public function getByBrandId($brandId)
    {
        $digitalActions = BrandsDigitalActions::where('brand_id', $brandId)
            ->join('digital_actions', 'digital_actions.id', '=', 'brands_digital_actions.digitalAction_id')->get();

        return response()->json($digitalActions);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DigitalActions $digitalActions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DigitalActions $digitalActions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DigitalActions $digitalActions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DigitalActions $digitalActions)
    {
        //
    }
}
