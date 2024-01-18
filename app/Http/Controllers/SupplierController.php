<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::paginate();

        return view('dashboard.suppliers.index', compact('suppliers'))
            ->with('i', (request()->input('page', 1) - 1) * $suppliers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = User::create([
            'name' => $request->input('name'),
            'email'=> $request->input('email'),
            'email_verified_at' => null,
            'password' => bcrypt($request->input('password')),
            'rols_id'=> $request->input('rols_id'),
        ]);

        $supplier = Supplier::create([
            'name' => $request->input('name'),
            'subname' => $request->input('subname'),
            'dni' => $request->input('dni'),
            'phone' => $request->input('phone'),
            'img_ref' => null,
            'users_id' => $user->id,
        ]);

        return redirect()->route('supplier.index') //llevar a perfil de frontend
            ->with('success', 'Registrado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
