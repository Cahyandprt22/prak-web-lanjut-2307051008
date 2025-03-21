<?php

namespace App\Http\Controllers;

use App\Models\Kelas;                   
use App\Models\UserModel;                  
use Illuminate\Http\Request;                                       
use App\Models\KelasModel;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    
    public function create(){ 
        return view('create_user', [
            'kelas' => Kelas::all() 
        ]); 
        }

        public function store(UserRequest $request)
        {
            $validatedData = $request->validate([
                'nama' => 'required|string|max:255',
                'npm' => 'required|string|max:255',
                'kelas_id' => 'required|exists:kelas,id',  
            ]);
        
            $user = UserModel::create($validatedData);
        
            $user->load('kelas');
        
            return view('profile', [
                'nama' => $user->nama,
                'npm' => $user->npm,
                'nama_kelas' => $user->kelas->nama_kelas ?? 'kelas tidak ditemukan',
            ]);

            $data = [
                'nama' => $request -> input('nama'),
                'id_kelas' => $request -> input('id_kelas'),
                'npm' => $request -> input('npm'), 
            ];
            return view('profile', $data);
        }
        //
}