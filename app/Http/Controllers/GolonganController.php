<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Golongan;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rows = golongan::all();
        return view('golongan.index', compact('rows'));
    }
    public function create()
    {
        return view('golongan.create');
    }

    public function store(Request $request)
    {
        Golongan::create([
            'gol_id' => $request->gol_id,
            'gol_kode' => $request->gol_kode,
            'gol_nama' => $request->gol_nama,
        ]);

        return redirect('golongan');
    }

    public function show(string $id)
    {
        $row = Golongan::findOrFail($id);

        //render view with post
        return view('golongan.show', compact('row'));
    }

    public function edit($id){
    {
        $row = Golongan::where('gol_id',$id)->first();
        return view('golongan.edit', compact('row'));
    }
    }  
     
    public function update(Request $request, string $id)
    {
            $row = Golongan::where('gol_id',$id);

    
            $row->update([
                'gol_nama'     => $request->gol_nama,
            ]);

            return redirect('golongan')->with(['success' => 'Pesan Berhasil']);
     }                

         public function destroy(string $id)
      {
          $row = Golongan::where('gol_id',$id);
                    
          $row->delete();
                    
          return redirect('golongan');
      }
}

