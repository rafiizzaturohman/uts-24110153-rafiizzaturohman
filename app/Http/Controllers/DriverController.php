<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index() {
        $drivers = Driver::all()->sortBy('kd_driver');

        return view('driver', compact('drivers'));
    }

    public function create() {
        return view('actions.createDriver');
    }

    public function store(Request $request): RedirectResponse {
        $validated=$request->validate([
            'kd_driver'=>'required',
            'name'=>'required|max:80',
            'phone'=>'required',
            'order_num'=>'required',
        ]);

        Driver::create([
            'kd_driver'=>$validated['kd_driver'],
            'name'=>$validated['name'],
            'phone'=>$validated['phone'],
            'order_num'=>$validated['order_num'],
            'created_at'=>now()
        ]);

        return redirect()->route('driver')->with(['success'=>'Data berhasil ditambahkan', 'failed'=>"Data gagal ditambahkan"]);
    }

    public function update($id) {
        $driver = Driver::findOrFail($id);

        return view('actions.editDriver', compact('driver'));
    }

    public function put(Request $request, $id) {
        $validated=$request->validate([
            'kd_driver'=>'required',
            'name'=>'required|max:80',
            'phone'=>'required',
            'order_num'=>'required',
        ]);

        $driver = Driver::findOrFail($id);

        $driver->update([
            'kd_driver'=>$validated['kd_driver'],
            'name'=>$validated['name'],
            'phone'=>$validated['phone'],
            'order_num'=>$validated['order_num'],
            'updated_at'=>now()
        ]);

        return redirect()->route('driver')->with(['success'=>'Data berhasil diupdate', 'failed'=>"Data gagal diupdate"]);
    }

    public function delete($id): RedirectResponse {
        $driver = Driver::findOrFail($id);

        $driver->delete();

        return redirect()->route('driver')->with(['success'=>'Data berhasil dihapus', 'failed'=>"Data gagal dihapus"]);
    }
}
