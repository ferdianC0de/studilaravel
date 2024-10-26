<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        $data = Kelas::all();
        return view('kelas.index', ['dataKelas' => $data]);
    }

    // Create
    public function create(){
        return view('kelas.create');
    }
    public function store(Request $request){
        Kelas::create([
            'nama_kelas' => $request->nama_kelas
        ]);

        return redirect(route('data-kelas.index'));
    }

    // Update
    public function edit(){

    }
    public function update(){

    }

    //Delete
    public function delete(){

    }
}
