<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
	protected $table ='pertanyaans';

	protected $fillable = ['id','judul', 'isi','created_at','updated_at'];
    public function jawaban(){
        //return $this->hasMany('App\Jawaban','pertanyaan_id');
        return $this->belongsTo('App\Jawaban','pertanyaan_id');
    }
}
