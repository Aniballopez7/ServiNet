<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $test =Test::paginate();

        return view('dashboard.tests.index', compact('test'))
            ->with('i', (request()->input('page', 1) - 1) * $test->perPage());
    }
    public function store(Request $request)
    {       
         $request->validate([
            'description' => 'required|string',
            'ref_url' => 'required|string',
          ]);
        $test =Test::create($request->all());

        return redirect()->route('test.index')->with('success', 'Prueba creada con éxito.');
    }
    public function destroy($id)
    {
        $test =Test::find($id)->delete();

        return redirect()->route('test.index')->with('success', 'Prueba eliminada con éxito.');
    }
}
