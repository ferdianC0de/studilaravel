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

    }
    public function store(){

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
