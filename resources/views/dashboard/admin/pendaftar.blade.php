@extends('layout.admin')
@section('judul')
    Data Pendaftar PPDB
@endsection
@section('konten')
<section class="section" style="height: 500px">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Pendaftar PPDB</h5>
            <p>Data Pendaftar PPDB MA Ma'arif Miftahul Ulum Melirang Bungah Gresik</p>
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-top"><div class="dataTable-dropdown">
                    {{--  Pendaftaran <a href="/excel" class="btn btn-sm btn-primary">Dibuka</a>  --}}
                    <a href="/excel" class="btn btn-sm btn-success">Export To Excel</a>
                </div>
                    {{--  <div class="dataTable-search">
                        <form class="search-form d-flex" method="POST" action="/search">
                            {{ csrf_field() }}
                            <input type="text" name="query" placeholder="Search Pendaftar PPDB" title="Enter search keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                          </form>
                    </div>  --}}
                </div>
                <div class="dataTable-container">
                    <table class="table datatable dataTable-table">
                <thead>
                  <tr>
                      <th scope="col" data-sortable=""><a href="#">No</a></th>
                      <th scope="col" data-sortable=""><a href="#">Photo</a></th>
                      <th scope="col" data-sortable=""><a href="#">ID Pendaftaran</a></th>
                      <th scope="col" data-sortable=""><a href="#">NISN</a></th>
                      <th scope="col" data-sortable=""><a href="#">Nama Lengkap</a></th>
                      <th scope="col" data-sortable=""><a href="#">Tempat, Tanggal Lahir</a></th>
                      <th scope="col" data-sortable=""><a href="#">No KK</a></th>
                      <th scope="col" data-sortable=""><a href="#">Alamat</a></th>
                      <th scope="col" data-sortable=""><a href="#">Asal Sekolah</a></th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i =1;?>
                    @foreach ( $data as $k)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>
                            <img src="{{asset($k->photo)}}" style="width:50px">
                        </td>
                        <td>{{  $k->id_registrasi }}</td>
                        <td>{{  $k->nisn }}</td>
                        <td>{{  $k->name }}</td>
                        <td>{{  $k->tmp_lahir }}, {{ $k->tgl_lahir }}</td>
                        <td>{{  $k->kk }}</td>
                        <td>{{  $k->alamat}}</td>
                        <td>{{  $k->asal_sekolah}}</td>

                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>

        </div>
    </div>
    </div>
    </div>
    </div>
</section>
@endsection
