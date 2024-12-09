<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drivers = Driver::all();
        return view('Dashboard.driver', compact('drivers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.createDriver');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaDriver' => 'required|string|max:255',
            'emailDriver' => 'required|string|email|max:255|unique:drivers',
            'username' => 'required|string|max:255|unique:drivers',
            'password' => 'required|string|min:8',
            'balance' => 'numeric',
        ]);

        $driver = new Driver();
        $driver->namaDriver = $request->input('namaDriver');
        $driver->emailDriver = $request->input('emailDriver');
        $driver->username = $request->input('username');
        $driver->password = bcrypt($request->input('password'));
        if ($request->input('balance') == null) {
            $driver->balance = $request->input('balance', 0);
            
        }else{
            $driver->balance = $request->input('balance');
        }
        $driver->save();
        return redirect()->route('driver')->with('success', 'Driver created successfully.');
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
        $driver = Driver::findOrFail($id);
        return view('Dashboard.editDriver', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'namaDriver' => 'string|max:255',
            'emailDriver' => 'string|email|max:255|unique:drivers,emailDriver,'.$id.',idDriver',
            'username' => 'string|max:255|unique:drivers,username,'.$id.',idDriver',
            'password' => 'string|min:8',
            'balance' => 'numeric',
        ]);

        $driver = Driver::findOrFail($id);
        $driver->namaDriver = $request->input('namaDriver');
        $driver->emailDriver = $request->input('emailDriver');
        $driver->username = $request->input('username');
        $driver->password = bcrypt($request->input('password'));
        if ($request->input('balance') == null) {
            $driver->balance = $request->input('balance', 0);
            
        }else{
            $driver->balance = $request->input('balance');
        }
        $driver->save();
        return redirect()->route('driver')->with('success', 'Driver updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $driver = Driver::findOrFail($id);
        $driver->delete();
        return redirect()->route('driver')->with('success', 'Driver deleted successfully.');
    }
}
