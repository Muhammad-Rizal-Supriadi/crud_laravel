@extends('admin.master')

@section('content')
	 <div class="card">
              <div class="card-header border-transparent">
                <h2>Judul : {{ $pertanyaan->judul }}</h2> <br>
                <h3 class="card-title">Pertanyaan : {{ $pertanyaan->isi }}</h3>
	
                	
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <form class="form-horizontal" method="post" action=" {{ url('jawaban',array($pertanyaan->id)) }}" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group row">
                  	<input type="hidden" class="form-control" name="pertanyaan_id" value="{{ $pertanyaan->id }}">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jawaban</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="isi">
                      <br> 
                    <button type="submit" class="btn btn-info">Save</button>
                    </div>
                  </div>
                </div>
              </form>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Jawaban</th>
                      <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=0;?>
   					 @foreach ($jawaban as $key => $jawaban)
   				    <?php $no++;?>
                    <tr>
                      <td><a href="pages/examples/invoice.html">{{$no}}</a></td>
                      <td>{{$jawaban->isi}}</td>
                      <td>
                      	  <input type="submit" class="btn btn-primary btn-sm" value="Ubah">
                      	  <input type="submit" class="btn btn-danger btn-sm" value="Hapus">
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="{{url('/pertanyaan')}}" class="btn btn-sm btn-info float-left">Kembali</a>
              </div>
              <!-- /.card-footer -->
            </div>
@endsection