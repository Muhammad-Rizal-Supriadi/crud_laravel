@extends('admin.master')

@section('content')
<!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Form Ubah Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action='{{ url("/pertanyaan/{$pertanyaan->id}/edit") }}' method="post">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="judul" value="{{ $pertanyaan->judul }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Pertanyaan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="isi" value="{{ $pertanyaan->isi }}" >
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                  <a href="{{ url('/pertanyaan') }}"><button type="submit" class="btn btn-default float-right">Cancel</button></a>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          @endsection