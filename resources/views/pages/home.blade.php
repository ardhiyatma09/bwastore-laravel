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
          @foreach ($categories as $category)
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{$incrementCategory += 100}}">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="{{Storage::url($category->photo)}}" alt="" class="w-100">
              </div>
              <p class="categories-text text-center">
                {{$category->name}}
              </p>
            </a>
          </div>
          @endforeach
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
          @foreach ($products as $product)
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{$incrementProduct += 100}}">
            <a href="{{route('product-details', $product->slug)}}" class="component-new-product d-block">
              <div class="new-product-thumbnail">
                <div class="new-product-image" style="background-image: url('{{Storage::url($product->galleries->first()->photos)}}');"></div>
              </div>
              <div class="new-product-name">{{$product->name}}</div>
              <div class="new-product-price">Rp. {{$product->price}}</div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
</div>
@endsection