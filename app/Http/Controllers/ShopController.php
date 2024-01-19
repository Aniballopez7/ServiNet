<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user(); // Obtener el usuario autenticado, si existe
        $supplier_totals = Supplier::all();

        if ($user) {
            // Obtener el customer asociado al usuario (si existe)
            $customer = $user->customer;
    
            // Obtener el supplier asociado al usuario (si existe)
            $supplier = $user->supplier;
    
            return view('front.home.index', compact('user', 'customer', 'supplier', 'supplier_totals'));
        } else {
            return view('front.home.index', compact('supplier_totals'));
        }
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
    }

    /**
     * Display the specified resource.
     */
    public function showCustomer(string $id)
    {
        $customer = Customer::find($id);

        return view('front.profileView.profileUser', compact('customer'));
    }
    public function showSupplier(string $id)
    {
        $supplier = Supplier::find($id);

        return view('front.profileView.profileProviders', compact('supplier'));
    }
    public function showOneSupplier(string $id)
    {
        $supplier = Supplier::find($id);

        return view('front.providers.providers', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editCustomer(string $id)
    {
        $customer = Customer::find($id);
        $user = User::find($customer->users_id);

        return view('front.profileConfig.profileUser', compact('customer'))->with([
            'user' => $user,
        ]);
    }
    public function editSupplier(string $id)
    {
        $supplier = Supplier::find($id);
        $user = User::find($supplier->users_id);

        return view('front.profileConfig.profileProviders', compact('supplier'))->with([
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateCustomer(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'subname' => 'required|string',
            'cedula' => 'required|integer|min:7',
            'edad' => 'required|integer',
            'users_id' => 'required',
        ]);
        $customer = Customer::find($id);

        $customer->update($request->all());
        
        if ($customer) {
            return view('front.profileView.profileUser', compact('customer'))->with('success', 'Datos actualizados con éxito');
        } else {
            return back()->with('error', 'No se pudo recuperar el cliente actualizado');
        }
    }
    public function updateSupplier(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'subname' => 'required|string',
            'dni' => 'required|integer|min:7',
            'phone' => 'required|integer',
            'users_id' => 'required',
        ]);
        $supplier = Supplier::find($id);

        $supplier->update($request->all());
        
        if ($supplier) {
            return view('front.profileView.profileProviders', compact('supplier'))->with('success', 'Datos actualizados con éxito');
        } else {
            return back()->with('error', 'No se pudo recuperar el cliente actualizado');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
