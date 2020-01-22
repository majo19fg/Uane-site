<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersRolesController extends Controller
{
    public function update(Request $request, User $usuario)
    {
        $usuario->syncRoles($request->roles);
        return back()->withFlash('Los roles han sido actualizados');
    }
}
