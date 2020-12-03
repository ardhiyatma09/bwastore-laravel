@extends('layouts.admin')

@section('title')
    Product Page
@endsection

@section('page-content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">My Products</h2>
        <p class="dashboard-subtitle">Manage it well and get money</p>
        <a href="{{route('products.add')}}" class="btn btn-success">Add New Product</a>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <div class="row mt-4">
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="{{route('products.detail')}}" class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <img src="https://picsum.photos/id/404/500/360" alt="" class="w-100 mb-2">
                    <div class="product-title">Nganu ini</div>
                    <div class="product-category">Furniture</div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="/dashboard-product-detail.html" class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <img src="https://picsum.photos/id/237/500/360" alt="" class="w-100 mb-2">
                    <div class="product-title">Nganu ini</div>
                    <div class="product-category">Furniture</div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="/dashboard-product-detail.html" class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <img src="https://picsum.photos/id/111/500/360" alt="" class="w-100 mb-2">
                    <div class="product-title">Nganu ini</div>
                    <div class="product-category">Furniture</div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="/dashboard-product-detail.html" class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <img src="https://picsum.photos/id/444/500/360" alt="" class="w-100 mb-2">
                    <div class="product-title">Nganu ini</div>
                    <div class="product-category">Furniture</div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="/dashboard-product-detail.html" class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <img src="https://picsum.photos/id/222/500/360" alt="" class="w-100 mb-2">
                    <div class="product-title">Nganu ini</div>
                    <div class="product-category">Furniture</div>
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