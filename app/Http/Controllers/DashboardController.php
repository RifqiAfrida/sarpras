<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Kelas;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $totaladmin = User::where('roles_id', 1)->count();
        $totalmurid = User::where('roles_id', 2)->count();
        $totalkelas = Kelas::get()->count();
        $inventories = Inventory::get()->count();
        $inventoriestotal = Inventory::get();

        return view('admin.dashboard.index', [
        
            'inventories' => $inventories,
            'totaladmin'  => $totaladmin,
            'totalmurid'  => $totalmurid,
            'totalkelas'  => $totalkelas,
            'inventoriestotal' => $inventoriestotal
        ]);
    }
}
