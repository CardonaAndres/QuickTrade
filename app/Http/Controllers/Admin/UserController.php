<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:users.index,show,store,edit,update,destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table('model_has_roles')
            ->join('users', 'model_has_roles.model_id', '=', 'users.id')
            ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->select('users.*','users.name AS user_name','users.id AS user_id','roles.*','roles.name AS role','roles.id AS role_id','model_has_roles.*')
            ->paginate(5);

        return view('admin.index',compact('users'));
    }

    public function edit(User $user)
    {
        $roles = Role::all();

        return view('admin.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        return redirect()->route('users.index')->with('info', 'Se Actualizó El Rol Del Usuario, Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();

        return redirect()->route('users.index')->with('info_delete', 'Se Elimino Al Usuario Correctamente');
    }
}
