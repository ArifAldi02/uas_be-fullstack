<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Agama64Controller extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:8000/api/agama64/')->json();
        return view('agama.agama', [
            'response' => $response,
            'no' => 1,
            'page' => "LIST AGAMA"
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_agama' => 'required|unique:agamas,nama_agama'
        ]);

        Http::post('http://localhost:8000/api/agama64/', [
            'nama_agama' => $request->nama_agama,
        ]);

        return redirect('/agama64')->with('success', 'Create success');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_agama' => 'required|unique:agamas,nama_agama'
        ]);

        Http::put('http://localhost:8000/api/agama64/' . $id, [
            'nama_agama' => $request->nama_agama
        ]);

        return redirect('/agama64')->with('success', 'Update success');
    }

    public function destroy($id)
    {
        $response = Http::delete('http://localhost:8000/api/agama64/' . $id);

        if ($response['success']) {
            return redirect('/agama64')->with('success', 'Delete success');
        }

        return redirect('/agama64')->with('error', 'Religion is being used');
    }
}