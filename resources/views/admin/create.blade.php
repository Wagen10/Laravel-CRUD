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
<form action="{{ url('cast') }}" method='post'>
    @csrf
    <div class="my-11 p-3 bg-body rounded shadow-md">
    <a href="{{ url('cast') }}" class ="btn btn-secondary"> BACK </a>
    <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='id' value="{{ Session::get('id') }}" id="id">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ Session::get('nama') }}" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='umur' value="{{ Session::get('umur') }}" id="umur">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="umur" class="col-sm-2 col-form-label">bio</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='bio' value="{{ Session::get('bio') }}" id="bio">
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