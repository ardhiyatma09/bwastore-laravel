@extends('layouts.seller')

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
              @forelse ($products as $product)
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="{{route('products.detail', $product->id)}}" class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <img src="{{Storage::url($product->galleries->first()->photos ?? '')}}" alt="" class="w-100 mb-2" style="height: 300px;object-fit:cover;">
                    <div class="product-title">{{$product->name}}</div>
                    <div class="product-category">{{$product->category->name}}</div>
                  </div>
                </a>
              </div>
              @empty
                <div class="col-12">
                  <div class="card card-dashboard-product d-block">
                    <div class="card-body text-center">
                      not found
                    </div>
                  </div>
                </div>
              @endforelse
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection