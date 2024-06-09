<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
        public function index()
    {
        $users = User::all();
        return view('adminusersindex', compact('users'));
    }


    public function edit($id)
{
    $user = User::findOrFail($id);
    return view('adminusersedit', compact('user'));
}

public function update(Request $request, $id)
{
    $user = User::findOrFail($id);
    $user->update($request->all());
    return redirect()->back()->with('success', 'User updated successfully.');
}





}
