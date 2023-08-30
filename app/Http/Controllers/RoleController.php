<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function allRole(){

     $role=Role::all();
     return view('roles.all-roles',compact('role'));
         
    }

    public function createRole(){

        return view('roles.create-role');
    }

    public function createFormRole(Request $request){
        $validatedData = $request->validate([
            'name' => 'required' // Rol adı zorunlu ve benzersiz olmalı
        ]);
    
        $role = Role::create([
            'name' => $validatedData['name'],
            'guard_name' => 'web',
        ]);
    
        return back();
    }
}
