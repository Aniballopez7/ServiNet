<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $supplier = Supplier::find($id);
        $user = User::find($supplier->users_id);

        return view('dashboard.suppliers.edit', compact('supplier'))->with([
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {

        $request->validate([
            'name' => 'required|string',
            'subname' => 'required|string',
            'dni' => 'required|integer|min:7',
            'phone' => 'required|integer',
            'img_ref' => 'image',
            'users_id' => 'required',
        ]);

    // Verifica si se ha enviado una nueva imagen
    if ($request->hasFile('img_ref')) {
        // Elimina la imagen anterior si existe
        if ($supplier->img_ref) {
            Storage::disk('public')->delete($supplier->img_ref);
        }

        // Almacena la nueva imagen y actualiza la ruta en la base de datos
        $img = $request->file('img_ref');
        $imgPath = $img->store('docs', 'public');
        $supplier->img_ref = $imgPath;
    }
    

    // Actualiza los demás campos del proveedor
    $supplier->update($request->except('img_ref'));

        return redirect()->route('supplier.index') //llevar a perfil de frontend
            ->with('success', 'Registrado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();

        return redirect()->route('supplier.index') //llevar a perfil de frontend
            ->with('success', 'Eliminado con éxito');
    }
}
