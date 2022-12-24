<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class User64Controller extends Controller
{
    public function myprofile()
    {
        $agama = Http::get('http://localhost:8000/api/agama64')['data'];
        return view('user.myprofile', [
            'agamas' => $agama,
            'page' => "MY PROFILE"
        ]);
    }

    public function editimage(Request $request, $id)
    {
        $request->validate([
            'foto' => 'required|image',
        ]);

        $user = User::findOrFail($id);
        $user->foto = $request->foto;

        if ($request->hasFile('foto')) {
            $foto_name = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move('img/', $request->file('foto')->getClientOriginalName());
        }

        Http::put('http://localhost:8000/api/user64/update/image/' . $id, [
            'foto' => $foto_name
        ]);

        return redirect('/myprofile64')->with('success', 'Change success');
    }

    public function editpassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|min:8'
        ]);

        Http::put('http://localhost:8000/api/user64/update/password/' . $id, [
            'password' => $request->password
        ]);

        return redirect('/myprofile64')->with('success', 'Change success');
    }

    public function index()
    {
        $user = Http::get('http://localhost:8000/api/user64')['data'];
        return view('user.user', [
            'users' => $user,
            'no' => 1,
            'page' => "LIST USER"
        ]);
    }

    public function show($id)
    {
        $user = Http::get('http://localhost:8000/api/user64/' . $id)['data'];

        return view('user.userdetail', [
            'user' => $user,
            'page' => "PROFILE USER"
        ]);
    }

    public function destroy($id)
    {
        Http::delete('http://localhost:8000/api/user64/' . $id);
        return redirect('/user64')->with('success', 'Delete success');
    }

    public function update($id)
    {
        Http::put('http://localhost:8000/api/user64/' . $id);
        return redirect('/user64')->with('success', 'Approve success');
    }
}