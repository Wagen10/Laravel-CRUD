@extends('admin.main')

@section('judul')
Table
@endsection

@section('isi')
@if($errors->any())
<div class="pt-3">
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
<!-- START FORM -->
<form action="{{ url('cast/'.$data->id) }}" method='post'>
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
         <a href="{{ url('cast') }}" class ="btn btn-secondary"> BACK </a> 
    <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                {{ $data->id }}
            </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='umur' value="{{ $data->umur }}" id="umur">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="umur" class="col-sm-2 col-form-label">bio</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='bio' value="{{ $data->bio }}" id="bio">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
        </div>
        <!-- AKHIR FORM -->
@endsection