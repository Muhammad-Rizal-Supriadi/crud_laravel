<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table ='jawabans';


	protected $fillable = ['id', 'isi','pertanyaan_id','created_at','updated_at'];

	public function pertanyaan(){
    	//return $this->belongsTo('App\Pertanyaan','id');
    	return $this->hasMany('App\Pertanyaan','id');
    }
}
