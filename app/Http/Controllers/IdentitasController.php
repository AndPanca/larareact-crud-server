<?php

namespace App\Http\Controllers;

use App\Identitas;
use Illuminate\Http\Request;

class IdentitasController extends Controller
{
    //Untuk GET API -> Menampilkan semua ID
    public function index(){
        $identitas = Identitas::orderBy('id', 'desc')->get();
        return response()->json($identitas);
    }

    //Untuk POST API -> Menambah data pada database dari API
    public function store(Request $request){
        $identitas = new Identitas;
        $identitas->id = $request->id;
        $identitas->name = $request->name;
        $identitas->birthday = $request->birthday;
        $identitas->gender = $request->gender;
        $identitas->email = $request->email;
        $identitas->phone = $request->phone;
        $identitas->address = $request->address;
        $identitas->save();
        return response()->json($identitas);
    }

    //Untuk GET BY ID -> Menampilkan data berdasarkan ID
    public function show($id){
        $identitas = Identitas::findOrFail($id);
        return response()->json($identitas);
    }

    //Untuk PUT BY ID (UPDATE) -> Mengupdate data berdasarkan ID
    public function update(Request $request, $id){
        $identitas = Identitas::findOrfail($id);
        $identitas->name = $request->name;
        $identitas->birthday = $request->birthday;
        $identitas->gender = $request->gender;
        $identitas->email = $request->email;
        $identitas->phone = $request->phone;
        $identitas->address = $request->address;
        $identitas->save();
        return response()->json($identitas);
    }

    //Untuk DELETE BY ID -> Menghapus data berdasarkan ID
    public function destroy($id){
        $identitas = Identitas::findOrfail($id);
        $identitas->delete();
        return response()->json($identitas);
    }

}
