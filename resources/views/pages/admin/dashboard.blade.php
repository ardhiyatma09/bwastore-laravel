@extends('layouts.admin')

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
                  Rp. {{$revenue}}
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
                  {{$transaction}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mt-2">
            <h5 class="mb-3">Recent Transaction</h5>
            <a href="" class="card card-list d-block">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-1">
                    <img src="{{url('template/images/dashboard-content1.png')}}" alt="">
                  </div>
                  <div class="col-md-4">
                    Shirup Marjan
                  </div>
                  <div class="col-md-3">
                    Angga Rizksy
                  </div>
                  <div class="col-md-3">
                    12 Januari 2020
                  </div>
                  <div class="col-md-1 d-none d-md-block">
                    <img src="{{url('template/images/arrow-right.svg')}}" alt="">
                  </div>
                </div>
              </div>
            </a>

            <a href="" class="card card-list d-block">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-1">
                    <img src="{{url('template/images/dashboard-content3.png')}}" alt="">
                  </div>
                  <div class="col-md-4">
                    Sofa Lembut
                  </div>
                  <div class="col-md-3">
                    John Doe
                  </div>
                  <div class="col-md-3">
                    31 Mei 2020
                  </div>
                  <div class="col-md-1 d-none d-md-block">
                    <img src="{{url('template/images/arrow-right.svg')}}" alt="">
                  </div>
                </div>
              </div>
            </a>

            <a href="" class="card card-list d-block">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-1">
                    <img src="{{url('template/images/dashboard-content2.png')}}" alt="">
                  </div>
                  <div class="col-md-4">
                    Lebron X
                  </div>
                  <div class="col-md-3">
                    Ardhiyatma R
                  </div>
                  <div class="col-md-3">
                    24 Maret 2020
                  </div>
                  <div class="col-md-1 d-none d-md-block">
                    <img src="{{url('template/images/arrow-right.svg')}}" alt="">
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection