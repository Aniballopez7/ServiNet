<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::paginate();

        return view('dashboard.customers.index', compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * $customers->perPage());
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
        $request->validate([
            'name' => 'required|string',
            'subname' => 'required|string',
            'cedula' => 'required|integer|min:7',
            'edad' => 'required|integer',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email'=> $request->input('email'),
            'email_verified_at' => null,
            'password' => bcrypt($request->input('password')),
            'rols_id'=> $request->input('rols_id'),
        ]);

        $customer = Customer::create([
            'name' => $request->input('name'),
            'subname' => $request->input('subname'),
            'cedula' => $request->input('cedula'),
            'edad' => $request->input('edad'),
            'users_id' => $user->id,
        ]);

        return redirect()->route('login')->with('success', 'Registrado con éxito');

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
        //desde la vista del perfil
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        
        return redirect()->route('customer.index') //llevar a perfil de frontend
            ->with('success', 'Eliminado con éxito');
    }
}
