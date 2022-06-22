<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Inventory;
use App\Models\Rent;

class DkvController extends Controller
{
    public function __invoke(Request $request)
    {
        $totalinventoridkv  = Rent::whereIn('kelas_id', [2,7,12])->get();

        return \view('admin.dkv.index', [
        'totalinventoridkv'  => $totalinventoridkv,
        ]);
    }
}
