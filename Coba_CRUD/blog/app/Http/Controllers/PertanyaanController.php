<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function create(){
        return view('pertanyaan.create');
    }

    public function store(Request $request){
        //    dd($request->all());

           $request->validate([
                'judul' => 'required|unique:pertanyaan',
                'isi' => 'required'
           ]);
           $query = DB::table('pertanyaan')->insert([
               "judul" => $request["judul"],
               "isi" => $request["isi"]
           ]);

           return redirect('/pertanyaan/create')->with('success', 'Pertanyaan Berhasil Disimpan!');
    }

    public function index (){
        $questions = DB::table('pertanyaan')->get(); //select * posts
        // dd($questions);
        return view('pertanyaan.index', compact('questions'));
    }

    public function show ($id){
        $questions = DB::table('pertanyaan')->where('id', $id)->first();
        // dd($post);
        return view('pertanyaan.show', compact('questions'));
    }

    public function edit ($id) {
        $questions = DB::table('pertanyaan')->where('id', $id)->first();

        return view('pertanyaan.edit', compact('questions'));
    }

    public function update ($id, Request $request){
        $query = DB::table('pertanyaan')->where('id', $id)->update([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);
            
        return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil Disimpan!');
    }

    public function destroy ($id){
        $query = DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('success', 'Post berhasil dihapus!');
    }
}
