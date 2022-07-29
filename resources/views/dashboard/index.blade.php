@extends('layout.admin')
@section('judul')
    Dashboard
@endsection
@section('konten')
@if (auth()->user()->role == 1)
<section class="section dashboard" style="height: 500px">
    <div class="row">
        <div class="col-lg-12 ">
        <div class="row">
            <div class="col-xxl-6 col-md-6">
            <div class="card info-card revenue-card">
                <div class="card-body">
                <h5 class="card-title">Jumlah Admin</span></h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="ps-3">
                    <h6>{{ $admin }} Admin</h6>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-xxl-6 col-md-6">
            <div class="card info-card sales-card">
                <div class="card-body">
                <h5 class="card-title">Jumlah Pendaftar PPDB</span></h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-check-fill"></i>
                    </div>
                    <div class="ps-3">
                    <h6>{{ $pendaftar }} Pendaftar</h6>
                    </div>
                </div>
                </div>
            </div>
            
        </div>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
</section>
@else
<section class="section" style="height: 500px">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">Dashboard</h1>
            <a target="_black" href="{{  url('cetak/'.\Auth::user()->id) }}" class="btn btn-success" style="color:white; width: 100px">Cetak</a>
          </div>
        </div>
      </div>
    </div>
</section>
@endif

@endsection
