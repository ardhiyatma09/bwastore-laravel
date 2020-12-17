@extends('layouts.app')

@section('title')
    Store Homepage
@endsection

@section('page-content')
<div class="page-content page-home">
    <section class="store-carousel">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-aos="zoom-in">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{url('template/images/banner.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{url('template/images/banner.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{url('template/images/banner.jpg')}}" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Trend Categories</h5>
          </div>
        </div>
        <div class="row">
          @php
            $incrementCategory = 0    
          @endphp
          @forelse ($categories as $category)
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{$incrementCategory += 100}}">
            <a href="{{route('categories-details',$category->slug)}}" class="component-categories d-block">
              <div class="categories-image">
                <img src="{{($category->photo) ? Storage::url($category->photo) : 'https://via.placeholder.com/250/F4F4F4/000000/?text=Not Found'}}" alt="" class="w-100">
              </div>
              <p class="categories-text text-center">
                {{$category->name}}
              </p>
            </a>
          </div>
          @empty
          <div class="col-12">
            <h2 class="text-center" data-aos="fade-up" data-aos-delay="100">Data category not found</h2>
          </div>
          @endforelse
        </div>
      </div>
    </section>
    <section class="store-new-product">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>New Products</h5>
          </div>
        </div>
        <div class="row">
          @php
            $incrementProduct = 0    
          @endphp
          @forelse ($products as $product)
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{$incrementProduct += 100}}">
            <a href="{{route('product-details', $product->slug)}}" class="component-new-product d-block">
              <div class="new-product-thumbnail">
                <div class="new-product-image" style="background-image: url('{{($product->galleries->first()) ? Storage::url($product->galleries->first()->photos) : 'https://via.placeholder.com/350/000000/FFFFFF/?text=Not Found Image' }}');"></div>
              </div>
              <div class="new-product-name">{{$product->name}}</div>
              <div class="new-product-price">Rp. {{$product->price}}</div>
            </a>
          </div>
          @empty
          <div class="col-12">
            <h2 class="text-center" data-aos="fade-up" data-aos-delay="100">Data product not found</h2>
          </div>
          @endforelse
        </div>
      </div>
    </section>
</div>
@endsection