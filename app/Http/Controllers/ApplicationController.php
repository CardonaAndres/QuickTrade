<?php

namespace App\Http\Controllers;

use App\Models\Application;
Use Illuminate\Http\Request;
use App\Models\Request_type;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:applications_all')->only('applications_all');
    }
    /**
     * Display a listing of the resource.
     */
    public function applications_all(){

        $applications = Application::join('request_types','applications.rtype_id', '=', 'request_types.id')
        ->join('users','applications.user_id', '=', 'users.id')
        ->select('request_types.*', 'applications.*','users.name AS user_name')->get();

        return view('applications.applications_all',compact('applications'));
    }

    public function index()
    {
        $id = Auth::user()->id;

        $applications = Application::join('request_types','applications.rtype_id', '=', 'request_types.id')
        ->select('request_types.*', 'applications.*')->where('user_id',$id)->get();

        return view('applications.index',compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $request_type = Request_type::all();

        return view('applications.create',compact('request_type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $application = $request->validate([
            'answer'=>'required',
            'user_id'=>'required',
            'rtype_id'=>'required',
        ]);

        Application::create($application);

        return redirect()->route('applications.index')->with('success','Solicitud Agregada Con Exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        $user_id = $application->user_id;
        $rtype_id = $application->rtype_id;

        $user = User::find($user_id);
        $request_type = Request_type::find($rtype_id);

        return view('applications.show',compact('application','user','request_type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        $request_type = Request_type::all();

        return view('applications.edit',compact('application','request_type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        $application_new = $request->validate([
            'answer'=>'required',
            'user_id'=>'required',
            'rtype_id'=>'required',
        ]);

        $application->update($application_new);

        return redirect()->route('applications.index')->with('success','Editado Con Exito');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
            // Elimina el registro de la base de datos
    $application->delete();

    // Redirige de nuevo a la página de índice o a donde desees después de la eliminación
    return redirect()->route('applications.index')->with('delete', 'Registro eliminado correctamente');
    }
    
}
