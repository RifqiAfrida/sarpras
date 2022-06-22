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

class UserController extends Controller
{
    /**
     * Function index untuk get data atau menampilkan data yang ada di table dan database
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('roles_id', 2)->get();

        return view('admin.user.index', [
            'users' => $user,
            'title' => 'user',
        ]);

    }

    /**
     * Untuk get data dan mengalihkan ke function store
     * 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::get();
        $kelas = Kelas::get();

        return view('admin.user.create', [
            'role'  => $role,
            'kelas' => $kelas,
            'title' => 'user'
        ]);
    }

    /**
     *Menambahkan data baru ke database seperti create user
     * 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $store = $request->validated();
        $store['password'] = Hash::make($request->password);

        User::create($store);

        return redirect()->route('admin.users.index')->with('success', 'User Baru Dibuat!');
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
    public function edit(User $user)
    {
        if ($user->roles_id == 1) {
            return \redirect()->back()->with('error', 'Anda bukan admin, tidak bisa di rubah!');
        }

        $kelas = Kelas::get();
        
        return view('admin.user.edit', [
            'user' => $user,
            'kelas'=> $kelas,
            'title'=> 'user'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
       //validation rules
        $update = $request->validated();
        if ($request->filled('password')) {
            $update['password'] = Hash::make($request->password);
        }
        $user->update($update);
        return redirect()->route('admin.users.index')->with('success', ' Data Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (\auth()->user()->roles_id == 2) {
            return \redirect()->back()->with('error', 'opps, terjadi sesuatu!');
        }

        $user->delete();
        return redirect()->route('admin.users.index')->with('danger', 'Data Berhasil Dihapus');
    }
}
