<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Verification;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    //
    public function index()
    {
        $ver =Verification::paginate();
        $test =Test::all();

        return view('dashboard.verifications.index', compact('ver'))
            ->with('i', (request()->input('page', 1) - 1) * $ver->perPage())
            ->with(['test' => $test]);
    }
    public function store(Request $request)
    {       
         $request->validate([
            'name' => 'required|string',
            'tests_id' => 'required',
          ]);
        $ver =Verification::create($request->all());

        return redirect()->route('verification.index')->with('success', 'Nivel creado con éxito.');
    }
    public function destroy($id)
    {
        $ver =Verification::find($id)->delete();

        return redirect()->route('verification.index')->with('success', 'Nivel eliminado con éxito.');
    }
}
