<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\RentsController;

class PplgController extends Controller
{
    public function __invoke(Request $request)
    {
        $totalinventoripplg = Rent::whereIn('kelas_id', [1,6,11])->get();

            return view('admin.pplg.index', [
            'totalinventoripplg' => $totalinventoripplg,
            'name'               => 'name',
        ]);
    }
}
