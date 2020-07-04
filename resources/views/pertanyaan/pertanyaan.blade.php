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
      <th style="width: 200px">Detail</th>
    </tr>
  </thead>
  <tbody>
  	<?php $no=0;?>
    @foreach ($pertanyaans as $key => $pertanyaan)
    <?php $no++;?>
    <tr>
      <td>{{$no}}</td>
      <td><a href='{{ url("/jawaban/{$pertanyaan->id}") }}'>{{$pertanyaan->judul}}</a></td>
      <td>
        {{ $pertanyaan->isi }}
      </td>
      <td>
        <a href='{{ url("/pertanyaan/{$pertanyaan->id}") }}'><input type="submit" class="btn btn-primary btn-sm" value="Detail"></a>

        <a href='{{ url("/pertanyaan/{$pertanyaan->id}/edit") }}'><input type="submit" class="btn btn-success btn-sm" value="Edit"></a>

        <a href='{{ url("/pertanyaand/{$pertanyaan->id}") }}'><input type="submit" class="btn btn-danger btn-sm" value="Delete"></a>
      </span>
    </td>
    </tr>
      @endforeach
  </tbody>
</table>
@endsection