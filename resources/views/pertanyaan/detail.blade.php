@extends('admin.master')

@section('content')
	<!-- include data- tables -->	
 <hr>
 <table class="table table-bordered">
  <thead>                  
    <tr>
      <th>Judul</th>
      <th>Isi</th>
      <th>Tanggal dibuat</th>
      <th>Tanggal diperbaharui</th>
      <th>Jawaban-jawaban</th>
    </tr>
  </thead>
  <tbody>
  	<tr>
      <td>{{ $pertanyaans->judul }}</td>
      <td>{{ $pertanyaans->isi }}</td>
      <td>{{date('l, d-m-Y', strtotime($pertanyaans->created_at))}}</td>
      <td>{{date('l, d-m-Y', strtotime($pertanyaans->updated_at))}}</td>
      <td>{{ $pertanyaans->jawaban['isi'] }}</td>
    </tr>
    
  </tbody>
</table>
@endsection