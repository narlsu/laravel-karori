<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    //
    public function index(){
    	return view('home');   	
     }


    public function admin() {
        return view('admin');
    }

    public function meeting() {
        return view('meeting');
    }

    public function modifyAccounts()
    {
        $allUsers = User::all();

        return view('modify-accounts', compact('allUsers'));
    }

    public function editAccount(User $user)
    {
        return view('edit-user', compact('user'));
    }

    public function toggleRoles(Request $request, User $user)
    {
        // If they have this role, remove it, otherwise add it
        if( $user->hasRole( $request->role ) ) {
            $user->removeRole( $request->role );
        } else {
            $user->assignRole( $request->role );
        }

        return back();

    }

    public function togglePermissions(Request $request, User $user)
    {
        // If they have this permission, remove it, otherwise add it
        if( $user->can( $request->permission ) ) {
            $user->revokePermissionTo( $request->permission );
        } else {
            $user->givePermissionTo( $request->permission );
        }

        return back();

    }
}
