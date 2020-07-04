<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index(){
    	$pertanyaans = Pertanyaan::orderBy('id','desc')->paginate(100);
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

     public function detail($id){
        $pertanyaans = Pertanyaan::find($id);
        return view('pertanyaan.detail',compact('pertanyaans'));
    }


    public function form_edit($id){
        $pertanyaan = Pertanyaan::find($id);
        return view('pertanyaan.edit',compact('pertanyaan'));
    }

    public function edit(Request $request, $id){
        $pertanyaan = Pertanyaan::find($id);
        $this->validate($request,[
            'judul' => 'required',
            'isi' => 'required'
        ]);
        $pertanyaan = new Pertanyaan();
        $pertanyaan->judul = $request->input('judul');
        $pertanyaan->isi = $request->input('isi');
        $data = array(
            'judul' => $pertanyaan->judul,
            'isi' => $pertanyaan->isi,
        );
        Pertanyaan::where('id',$id)
        ->update($data);
        $pertanyaan->update($data);
        return redirect('/pertanyaan');
    }

    public function delete($id){
        Pertanyaan::where('id',$id)
        ->delete();
        return redirect()->back();
    }
}
