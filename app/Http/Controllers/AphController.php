<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Rent;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AphController extends Controller
{
    public function __invoke(Request $request)
    {
        $totalinventoriaph  = Rent::whereIn('kelas_id', [4,9,14])->get();

        return view('admin.aph.index', [
            'totalinventoriaph' => $totalinventoriaph
        ]);
    }
}
