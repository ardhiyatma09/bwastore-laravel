@extends('layouts.seller')

@section('title')
    Transaction
@endsection

@section('page-content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Transactions</h2>
        <p class="dashboard-subtitle">Big result start from the small one</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12 mt-2">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Sell Product</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Buy Product</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <a href="{{route('transaction.detail')}}" class="card card-list d-block">
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
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection