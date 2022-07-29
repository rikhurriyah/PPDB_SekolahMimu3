@extends('layout.admin')
@section('judul')
    Data Pendaftar PPDB
@endsection
@section('konten')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
              @foreach ($data as $item)


                <table class="table">

                    <tr>
                        <th width="500px">Kode Barang</th>
                        <th>: {{ $item->name }}</th>
                    </tr>
                    <tr>
                        <th width="500px">Nama Barang</th>
                        <th>: {{ $item->nisn }}</th>
                    </tr>
                    <tr>
                        <th width="500px">Kategori</th>
                        <th>: {{ $item->tgl_lahir }}</th>
                    </tr>

                    <tr>
                        <th width="500px">Satuan</th>
                        <th>: {{ $item->tgl_lahir }}</th>
                    </tr>
                    @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
        <tr>
            <a href="/pendaftar" class="btn btn-sm btn-success">kembali</a>
        </tr>
@endsection
