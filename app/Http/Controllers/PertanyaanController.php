<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index(){
    	$pertanyaans = Pertanyaan::all();
    	return view('pertanyaan.pertanyaan',compact('pertanyaans'));
    }

    public function create(){
    	return view('pertanyaan.form');
    }

    public function store(Request $request){
    	$this->validate($request,[
    		'judul' => 'required',
    		'isi' => 'required'
    	]);
    	$pertanyaan = new Pertanyaan();
    	$pertanyaan->judul = $request->judul;
    	$pertanyaan->isi = $request->isi;
    	$pertanyaan->save();
    	return redirect('/pertanyaan');
    }
}
