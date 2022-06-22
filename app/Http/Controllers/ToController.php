<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Rent;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ToController extends Controller
{
    public function __invoke(Request $request)
    {
        $totalinventorito   = Rent::whereIn('kelas_id', [5,10,15])->get();
        
        return view('admin.to.index', [
            'totalinventorito'   => $totalinventorito,
        ]);
    }
}
