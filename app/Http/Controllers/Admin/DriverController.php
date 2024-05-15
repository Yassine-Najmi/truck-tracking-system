<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::latest()->paginate(12);
        return Inertia::render('Admin/Driver/Index', compact('drivers'));
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
        // $request->validate([
        //     'full_name' => ['required', 'string', 'max:255'],
        //     'code' => ['required', 'string', 'max:255', 'unique:drivers'],
        //     'adresse' => ['string', 'max:255'],
        //     'phone' => ['string', 'max:255'],
        //     'numero_2' => ['string', 'max:255'],
        //     'cni' => ['string', 'max:255'],
        //     'cnss' => ['string', 'max:255'],
        // ]);
        Driver::create([
            'full_name' => $request->full_name,
            'code' => $request->code,
            'adresse' => $request->adresse,
            'phone' => $request->phone,
            'numero_2' => $request->numero_2,
            'cni' => $request->cni,
            'cnss' => $request->cnss,
        ]);
        return Inertia::location(route('admin.drivers.index'));
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
