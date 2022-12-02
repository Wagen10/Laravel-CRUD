@extends('admin.main')

@section('judul')
Table
@endsection


@section('isi')

        
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('cast') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href="{{ url('cast/create') }}" class="btn btn-primary">+ Tambah Data</a>
                </div>
                @include('admin.pesan')
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">ID</th>
                            <th class="col-md-4">Nama</th>
                            <th class="col-md-2">Umur</th>
                            <th class="col-md-3">Bio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?php $i =$data->firstItem() ?>-->
                        @foreach ($data as $item) 
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->umur }}</td>
                            <td>{{ $item->bio }}</td>
                            <td>
                                <a href="{{ url('cast/'.$item->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Are You sure to delete this item?')" 
                                class='d-inline'action="{{ url('cast/'.$item->id) }}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm" >Del</button>
                                </form>
                                
                            </td>
                        </tr>
                        <!-- <?php $i++ ?> -->
                        @endforeach
                    </tbody>
                </table>
                {{ $data->withQueryString()->links() }}
               
          </div>
          <!-- AKHIR DATA -->

@endsection