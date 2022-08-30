<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hyip as Hyip;

class HyipController extends Controller
{
    public function index()
    {
        $hyip = new Hyip();
        $dataView = [
            'data' => $hyip->all()
        ];
        return view('dashboard', $dataView);
    }

    public function addHyip(Request $request)
    {
        $hyip = new Hyip();
        $hyip->addHyip($request->all());

        return redirect()->back();
    }
}
