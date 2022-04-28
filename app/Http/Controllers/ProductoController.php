<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('producto.index');
    }

    public function create()
    {
        return view('producto.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function foto($foto)
    {
        //
    }

    public function foto_store(Request $request, $foto)
    {
        //
    }

    public function foto_destroy($foto)
    {
        //
    }

    public function foto_update(Request $request, $foto)
    {
        //
    }

    public function foto_show($foto)
    {
        //
    }

    

}
