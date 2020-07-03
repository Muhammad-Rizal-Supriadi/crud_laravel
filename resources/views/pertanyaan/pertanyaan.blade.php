@extends('admin.master')

@section('content')
	<!-- include data- tables -->
 <a href="{{ url('/pertanyaan/create') }}"><input type="submit" class="btn btn-success" value="Ajukan Pertanyaan"> </a></span>	
 <hr>
 <table class="table table-bordered">
  <thead>                  
    <tr>
      <th style="width: 10px">#</th>
      <th>Judul</th>
      <th>Pertanyaan</th>
      <th style="width: 40px">Label</th>
    </tr>
  </thead>
  <tbody>
  	<?php $no=0;?>
    @foreach ($pertanyaans as $key => $pertanyaan)
    <?php $no++;?>
    <tr>
      <td>{{$no}}</td>
      <td>{{$pertanyaan->judul}}</td>
      <td>
        {{ $pertanyaan->isi }}
      </td>
      <td><input type="submit" class="btn btn-primary" value="Jawab Pertanyaan"></span></td>
    </tr>
      @endforeach
  </tbody>
</table>
@endsection