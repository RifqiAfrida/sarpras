<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Roles;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminUserRequest;

class AdminController extends Controller
{
    /**
     * Admin controller sama dengan user controller tapi memiliki pembeda role atau is_admin
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminuser = User::where('roles_id', 1)->get();

        return view('admin.adminuser.index', [
            'adminuser' => $adminuser,
            'title' => 'admin',
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::get();

        return view('admin.adminuser.create', [
            'role'  => $role,
            'title' => 'admin'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUserRequest $request)
    {
        $store = $request->validated();
        $store['password'] = Hash::make($request->password);

        User::create($store);

        return redirect()->route('admin.adminusers.index')->with('success', 'Admin Baru Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::where('role_id', 3)->get();

        // return view('', [

        //     'user' => $user,
        //     'title' => 'Detail'
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $adminuser)
    {
        if ($adminuser->roles_id == 1) {
            return \redirect()->back()->with('error', 'admin tidak bisa di rubah!');
        }
        
        return view('admin.adminuser.edit', [
            'adminuser' => $adminuser,
            'title'=> 'admin'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUserRequest $request, User $adminuser)
    {
       //validation rules
        $update = $request->validated();
        if ($request->filled('password')) {
            $update['password'] = Hash::make($request->password);
        }
        $adminuser->update($update);
        return redirect()->route('admin.users.index')->with('success', ' Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $adminuser)
    {
        if (\auth()->user()->roles_id == 2) {
            return \redirect()->back()->with('error', 'opps, terjadi sesuatu!');
        }

        $adminuser->delete();
        return redirect()->route('admin.adminusers.index')->with('danger', 'Data Berhasil Dihapus');
    }
}
