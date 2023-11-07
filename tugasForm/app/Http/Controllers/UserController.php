<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(Request $request)
    {

        $users = User::all();
        $data = array(
            'title' => 'Tampil Data',
            'users' => $users
        );
        return view('showAll', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:users',
            'jk' => 'required',
            'hobi' => 'required',
            'status' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'nomor' => 'required',
        ]);


        User::create($validated);

        return redirect('/index')->with('success', 'Data User Berhasil disimpan');
    }

    public function show(User $user)
    {
        $data = array(
            'title' => 'Detail Data',
            'user' => $user,
        );
        return view('detailData', $data);
    }


    public function edit(User $user)
    {

        $data = array(
            'title' => 'edit Data',
            'user' => $user,
        );
        return view('editData', $data);
    }

    public function update(Request $request, User $user)
    {

        $rules = [
            'nama' => 'required',
            'jk' => 'required',
            'hobi' => 'required',
            'status' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'nomor' => 'required',
        ];

        if ($request->nim != $user->nim) {
            $rules['nim'] = 'required|unique:users';
        }

        $validatedData = $request->validate($rules);
        User::Where('id', $user->id)
            ->update($validatedData);


        return redirect('/index')->with('success', 'Data User Berhasil Diedit');
    }

    public function destroy(User $user)
    {

        User::destroy($user->id);
        return redirect('/index')->with('success', 'Data User Berhasil dihapus');
    }
}
