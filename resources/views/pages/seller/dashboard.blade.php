@extends('layouts.seller')

@section('title')
    Dashboard Admin
@endsection

@section('page-content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Dashboard</h2>
        <p class="dashboard-subtitle">Look what you have made today!</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">
                  Customer
                </div>
                <div class="dashboard-card-subtitle">
                  {{$customer}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">
                  Revenue
                </div>
                <div class="dashboard-card-subtitle">
                  Rp. {{number_format($revenue)}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">
                  Transaction
                </div>
                <div class="dashboard-card-subtitle">
                  {{$transaction_count}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mt-2">
            <h5 class="mb-3">Recent Transaction</h5>
            @forelse ($transaction_data as $data)
            <a href="{{route('transaction.detail', $data->id)}}" class="card card-list d-block">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-1">
                    <img src="{{Storage::url($data->product->galleries->first()->photos ?? '')}}" alt="" class="w-50">
                  </div>
                  <div class="col-md-4">
                    {{$data->product->name ?? ''}}
                  </div>
                  <div class="col-md-3">
                    {{$data->transaction->user->name ?? ''}}
                  </div>
                  <div class="col-md-3">
                    {{$data->created_at ?? ''}}
                  </div>
                  <div class="col-md-1 d-none d-md-block">
                    <img src="{{url('template/images/arrow-right.svg')}}" alt="">
                  </div>
                </div>
              </div>
            </a>
            @empty
            <a href="#" class="card card-list d-block">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 text-center">
                    Tidak ada
                  </div>
                </div>
              </div>
            </a>
            @endforelse
          </div>
        </div>
      </div>
    </div>
</div>
@endsection