<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DeviceRequest;
use App\Models\Device;

class DevicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('inventarizasiya.device');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventarizasiya.deviceForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DeviceRequest $request)
    { 

       
       Device::create($request->validated());
       return back();
       
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
