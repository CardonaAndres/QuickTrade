<?php

namespace App\Http\Controllers;

use App\Models\Request_type;
Use Illuminate\Http\Request;


class RequestTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:request_type.index,create,show,store,edit,update,destroy');
    }

    public function index()
    {
        $request_type = Request_type::all();
        
        return view('request_type.index',compact('request_type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('request_type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request_type = $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);

        Request_type::create($request_type);

       return redirect()->route('request_type.index')->with('success', 'Registro agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request_type $request_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request_type $request_type)
    {
        return view('request_type.edit',compact('request_type'))->with('success', 'Editado Correctamente');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Request_type $request_type)
    {
        $request_type_new = $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);

        $request_type->update($request_type_new);

        return redirect()->route('request_type.index')->with('success', 'Registro editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request_type $request_type) {

    $request_type->delete();

    return redirect()->route('request_type.index')->with('delete', 'Registro eliminado correctamente');
    }
}