<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Kurss;
class KurssController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'Nosaukums' => 'required|max:255',
            'paskaidrojosais_teksts' => 'required',
            'adrese' => 'required',
            'cilveku_skaits' => 'required|integer',
        ]);

        $kurss = Kurss::create($validated);
        return response()->json($kurss);
    }

    public function index(){
        return response()->json(Kurss::all());
        }
}
