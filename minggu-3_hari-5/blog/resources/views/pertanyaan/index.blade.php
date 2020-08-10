@extends('adminlte.master')

@section('content')
    <div class="mt-3 ml-3">
        <div class="card">
            <div class="card-header with-border">
              <h3 class="card-title">Table Pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              @if (session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
              @endif
              <a class="btn btn-primary mb-2" href="/pertanyaan/create">Buat Pertanyaan Baru</a>
              <table class="table table-bordered">
                <tbody>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Judul</th>
                  <th>Body</th>
                  <th style="width: 100px">Action</th>
                </tr>
                @forelse ($questions as $key => $question)
                    <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{$question -> judul}}</td>
                      <td>{{$question -> isi}}</td>
                      <td style="display: flex">
                        <a href="/pertanyaan/{{$question->id}}" class="btn btn-info btn-sm">Show</a>
                        <a href="/pertanyaan/{{$question->id}}/edit" class="btn btn-default btn-sm ml-1">Edit</a>
                        <form action="/pertanyaan/{{$question->id}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <input type="submit" value="delete" class="btn btn-danger btn-sm ml-1">
                        </form>
                      </td>
                    </tr>
                @empty
                    <tr>
                      <td colspan="4" align="center">Tidak ada pertanyaan</td>
                    </tr>                      
                @endforelse
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            {{-- <div class="card-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div> --}}
          </div>
    </div>
@endsection