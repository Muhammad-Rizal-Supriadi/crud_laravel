<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Jawaban;

class JawabanController extends Controller
{
	public function index($id){
		$pertanyaan = Pertanyaan::find($id);
		$jawaban = Jawaban::all();
		return view('jawaban.jawaban',compact('pertanyaan','jawaban'));
	}

    public function store(Request $request, $id){
    	$pertanyaan = Pertanyaan::find($id);
    	$this->validate($request,[
    		'pertanyaan_id' => 'required',
    		'isi' => 'required'
    	]);
    	$pertanyaan = new Jawaban;
    	$pertanyaan->isi = $request->input('isi');
    	$pertanyaan->pertanyaan_id = $request->input('pertanyaan_id');
    	$pertanyaan->save();
    	return redirect()->back()->with('response', 'Berhasil Ditambahkan');

    }

   
}
