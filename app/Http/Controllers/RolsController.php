<?php

namespace App\Http\Controllers;

use App\Models\Rols;
use Illuminate\Http\Request;

class RolsController extends Controller
{
    //
    public function index()
    {
        $rols =Rols::paginate();

        return view('dashboard.roles.index', compact('rols'))
            ->with('i', (request()->input('page', 1) - 1) * $rols->perPage());
    }
}
