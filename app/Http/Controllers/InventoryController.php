<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Inventory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventories = Inventory::get();
        $kelas = Kelas::get();

        return view('admin.inventori.index', [
            'inventories' => $inventories,
            'kelas' => $kelas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user,Kelas $kelas)
    {
        // return view('admin.inventori.create', [
        //     'inventories' => Inventory::all()
        // ]);

         $kelas = Kelas::get();

        return view('admin.inventori.create', [
            'users' => $user,           
            'kelas' => $kelas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInventoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInventoryRequest $request)
    {

        $store = $request->validated();

        $store['user_id'] = auth()->user()->id;        

        Inventory::create($store);

        return redirect()->route('admin.inventories.index')->with('success', 'Inventori Ditambahkan!');

        // $store = $request->validated();

        // $store['user_id'] = auth()->user()->id;
        // $store['kelas_id'] = auth()->user()->id;
        
        // Inventory::create($store);

        // return redirect()->route('admin.inventori.index')->with('success', 'Inventori Dibuat');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
         $user        = User::get();

        return view('admin.inventori.edit', [
            'users' => $user,           
            'inventory' => $inventory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInventoryRequest  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInventoryRequest $request, Inventory $inventory)
    {

        $update = $request->validated();

        $update['user_id'] = auth()->user()->id;

        $inventory->update($update);

        return redirect()->route('admin.inventories.index')->with('success', 'Inventori Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventories)
    {
        $inventories->delete();
        return redirect()->route('admin.inventories.index')->with('danger', 'Inventori Dihapus');
    }
}
