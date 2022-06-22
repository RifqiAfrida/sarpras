<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Rent;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AklController extends Controller
{
    public function __invoke(Request $request)
    {
        $totalinventoriakl  = Rent::whereIn('kelas_id', [3,8,13])->get();

        return \view('admin.akl.index', [
            'totalinventoriakl'  => $totalinventoriakl,
        ]);
    }
}
