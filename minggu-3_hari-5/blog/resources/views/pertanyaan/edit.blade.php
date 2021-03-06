@extends('adminlte.master')

@section('content')
<div class="ml-2 mt-2">
    <div class="card card-primary">
        <div class="card-header with-border">
        <h3 class="card-title">Ubah Pertanyaan {{ $questions->id }} </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
    <form role="form" action="/pertanyaan/{{ $questions->id }}" method="POST">
        @csrf
        @method('PUT')
          <div class="card-body">
            <div class="form-group">
                <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" value="{{old('judul', $questions->judul)}}" name="judul" placeholder="Masukkan Judul">
                @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="isi">Isi Pertanyaan</label>
                <input type="text" class="form-control" id="isi" value="{{old('isi', $questions->isi)}}" name="isi" placeholder="Masukkan Isi Pertanyaan">
                @error('isi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
          </div>
          <!-- /.card-body -->
    
          <div class="card-footer pl-4 pb-2">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
    </div>
</div>
@endsection