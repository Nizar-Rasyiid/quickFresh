<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('User.index');
    }

    public function dashboard() {
        $pelanggans = Pelanggan::all();
        return view('Dashboard.Pelanggan.index', compact('pelanggans'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('User.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaPelanggan' => 'required|string|max:255',
            'emailPelanggan' => 'required|string|email|max:255|unique:pelanggans',
            'alamat' => 'required|string|max:255',
            'noTelp' => 'required|string|min:8',
        ]);

        $pelanggan = new Pelanggan();
        $pelanggan->namaPelanggan = $request->input('namaPelanggan');
        $pelanggan->emailPelanggan = $request->input('emailPelanggan');
        $pelanggan->alamat = $request->input('alamat');
        $pelanggan->noTelp = $request->input('noTelp');
        $pelanggan->save();
        return redirect()->route('food')->with('success', 'Data berhasil ditambahkan');
    }

    public function food()
    {
        // dd('Food page loaded');
        return view('User.food');
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
