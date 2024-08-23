<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role_id', 2)->get();
        return view('admin.umkm.index', ["users" => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.umkm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $username = User::where('username', $request->username)->first();

        if(!$username){
            User::create([
                'name'      => $request->name,
                'username'  => $request->username,
                'password'  => Hash::make('123'),
                'address'   => $request->address,
                'contact'   => $request->contact,
                'account_number'   => $request->account_number,
                'account_bank'   => $request->account_bank,
                'role_id'   => 2
            ]);

            return redirect('user');
        }else{
            return redirect()->back()->with('error', 'Username telah terdaftar.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {
        $user = User::find($user_id);
        return view('admin.umkm.update', ["users" => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $user->update($request->all());
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        User::destroy($user_id);
        return redirect('user');
    }

    public function resetPassword($user_id)
    {
        $user = User::find($user_id);
        $user->update([
            'password'  => Hash::make('123')
        ]);
        return redirect('user');
    }
}
