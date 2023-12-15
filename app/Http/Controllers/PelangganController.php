<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rows = Pelanggan::all();
        return view('pelanggan.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.create');
    }
    public function store(Request $request)
    {
        Pelanggan::create([
            'pel_id' => $request->pel_id,
            'pel_id_gol' => $request->pel_id_gol,
            'pel_no' => $request->pel_no,
            'pel_nama'=> $request->pel_nama,
            'pel_alamat'=> $request->pel_alamat,
            'pel_hp'=> $request->pel_hp,
            'pel_ktp'=> $request->pel_ktp,
            'pel_seri'=> $request->pel_seri,
            'pel_meteran'=> $request->pel_meteran,
            'pel_aktif'=> $request->pel_aktif,
            'pel_id_user'=> $request->pel_id_user,
        ]);

        return redirect('pelanggan');
    }
    public function show(string $id)
    {
        $row = Pelanggan::findOrFail($id);

        //render view with post
        return view('pelanggan.show', compact('row'));
    }
    public function edit($id){
        {
            $row = Pelanggan::where('pel_id',$id)->first();
            return view('pelanggan.edit', compact('row'));
        }
        }  
    
         
        public function update(Request $request, string $id)
        {
                $row = Pelanggan::where('pel_id',$id);
    
        
                $row->update([
                    'pel_nama'     => $request->pel_nama,
                    'pel_id_gol'     => $request->pel_id_gol,
                    'pel_no'     => $request->pel_no,
                    'pel_alamat'     => $request->pel_alamat,
                    'pel_hp'     => $request->pel_hp,
                    'pel_id_user'     => $request->pel_id_user,
                    'pel_ktp'     => $request->pel_ktp,
                    'pel_seri'     => $request->pel_seri,
                    'pel_meteran'     => $request->pel_meteran,
                    'pel_aktif'     => $request->pel_aktif,

                ]);
    
        
        
                return redirect('pelanggan')->with(['success' => 'Pesan Berhasil']);
                
                         
                            }                
    
        public function destroy(string $id)
        {               {
            $row = Pelanggan::findOrFail($id);
    
            $row->delete();
    
            return redirect('pelanggan');
        }
            //
        }
}
    
    /**
     * Store a newly created resource in storage.
     */
