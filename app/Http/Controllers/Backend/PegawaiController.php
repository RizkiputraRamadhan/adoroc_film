<?php

namespace App\Http\Controllers\Backend;

use App\Models\AlatFilm;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{

    public function index()
    {
        $data = User::orderBy('id', 'desc')->where('roles', 2)->get();
        return view('backend.pegawai.index', [
            'data' => $data
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'roles' => 2,
        ]);

        if ($user) {
            return redirect()->back()->with('success', 'Account successfully created.');
        } else {
            return redirect()->back()->with('error', 'Failed to create account. Please try again.');
        }
    }


    public function update(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'id' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'nullable|string|max:255',
        ]);

        $id = $request->id;
        $User = User::find($id);
        if (!$User) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }
        $User->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'] !== null ? bcrypt($validatedData['password']) : '',
        ]);
        return redirect()->back()->with('success', 'User berhasil diubah.');
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User gagal dihapus.');
        }
        $user->delete();
        return redirect()->back()->with('success', 'User berhasil dihapus.');
    }


}
