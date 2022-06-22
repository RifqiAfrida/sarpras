<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\Kelas;
use App\Models\Inventori;
use App\Models\Inventory;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreRentsRequest;
use App\Http\Requests\UpdateRentsRequest;
use Illuminate\Http\Request;

class RentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rents      = Rent::with('inventory')->get();
        $inventories = Inventory::get();
        $kelas = Kelas::get();

        return view('admin.rents.index', [
            'rents' => $rents,
            'kelas' => $kelas,
            'inventories' => $inventories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas       = Kelas::get();
        $inventories = Inventory::get();
        return view('admin.rents.create', [
            'inventories' => $inventories,
            'kelas'       => $kelas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRentsRequest $request)
    {
       $rents = $request->validated();

       $data = Inventory::query()->find($request->inventories_id); 
       
       if (! $data->exists()) {
           return redirect()->back()->with('danger', 'Data Tidak Tersedia');
       }

       if ($data->qty < $request->qty) {
           return redirect()->back()->with('danger', 'Data melebihi batas');
       }

       $data->qty = $data->qty - $request->total;
       $data->save();
       
       Rent::create($rents);

       return redirect()->route('admin.rents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rents  $rents
     * @return \Illuminate\Http\Response
     */
    public function show(Rents $rents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rents  $rents
     * @return \Illuminate\Http\Response
     */
    public function edit(Rents $rents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRentsRequest  $request
     * @param  \App\Models\Rents  $rents
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRentsRequest $request, Rents $rents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rents  $rents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rent $rent)
    {
        $data = Inventory::query()->find($rent->inventories_id);

        $data->qty = $data->qty + $rent->total;
        $data->save();

        $rent->delete();
        return \redirect()->route('admin.rents.index');
    }
}
