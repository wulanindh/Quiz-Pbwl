<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = User::all();
        return view('user.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'user_nama'     => $request->user_nama,
            'email'     => $request->email,
            'user_alamat'     => $request->user_alamat,
            'user_hp'     => $request->user_hp,
            'pel_hp'     => $request->user_pos,
            'user_pos'     => $request->pel_id_user,
            'user_role'     => $request->user_role,
            'user_aktif'     => $request->user_aktif,
        ]);

        return redirect('user');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        {
            $row = User::where('id',$id)->first();
            return view('user.edit', compact('row'));
        }
        }  
    
         
        public function update(Request $request, string $id)
        {
                $row = User::where('id',$id);
    
        
                $row->update([
                    'user_nama'     => $request->user_nama,
                    'email'     => $request->email,
                    'user_alamat'     => $request->user_alamat,
                    'user_hp'     => $request->user_hp,
                    'user_pos'     => $request->user_pos,
                    'user_role'     => $request->user_role,
                    'user_aktif'     => $request->user_aktif,
                   
        
                ]);
    
        
        
                return redirect('user')->with(['success' => 'Pesan Berhasil']);
                
                         
                            } 
    public function destroy(string $id)
    {
        {
            $row = User::findOrFail($id);
    
            $row->delete();
    
            return redirect('user');
        }
        //
    }
}
