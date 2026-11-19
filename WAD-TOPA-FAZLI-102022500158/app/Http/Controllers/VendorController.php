<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = Vendor::all();
        return view('vendors.index', compact('vendors'));
    }

    public function create()
    {
        return view('vendors.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'kode'   => 'required|max:10|unique:vendors,kode',
            'nama'   => 'required|max:100',
            'kota'   => 'required|max:50',
            'pic'    => 'required|max:50',
            'status' => 'required',
        ]);

        Vendor::create($data);
        return redirect()->route('vendors.index');
    }

    public function show(Vendor $vendor)
    {
        return view('vendors.show', compact('vendor'));
    }

    public function edit(Vendor $vendor)
    {
        return view('vendors.edit', compact('vendor'));
    }

    public function update(Request $request, Vendor $vendor)
    {
        $data = $request->validate([
            'kode'   => 'required|max:10|unique:vendors,kode,' . $vendor->id,
            'nama'   => 'required|max:100',
            'kota'   => 'required|max:50',
            'pic'    => 'required|max:50',
            'status' => 'required',
        ]);

        $vendor->update($data);
        return redirect()->route('vendors.index');
    }

    public function destroy(Vendor $vendor)
    {
        $vendor->delete();
        return redirect()->route('vendors.index');
    }
}