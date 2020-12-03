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
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="{{url('template/images/gadget-categories.svg')}}" alt="" class="w-100">
              </div>
              <p class="categories-text text-center">
                Gadgets
              </p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="{{url('template/images/furniture-categories.svg')}}" alt="" class="w-100">
              </div>
              <p class="categories-text text-center">
                Furniture
              </p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="{{url('template/images/makeup-categories.svg')}}" alt="" class="w-100">
              </div>
              <p class="categories-text text-center">
                Make Up
              </p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="{{url('template/images/sneaker-categories.svg')}}" alt="" class="w-100">
              </div>
              <p class="categories-text text-center">
                Sneaker
              </p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="{{url('template/images/tools-categories.svg')}}" alt="" class="w-100">
              </div>
              <p class="categories-text text-center">
                Tools
              </p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="{{url('template/images/baby-categories.svg')}}" alt="" class="w-100">
              </div>
              <p class="categories-text text-center">
                Baby
              </p>
            </a>
          </div>
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
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a href="{{route('product-details')}}" class="component-new-product d-block">
              <div class="new-product-thumbnail">
                <div class="new-product-image" style="background-image: url('{{url('template/images/apple.jpg')}}');"></div>
              </div>
              <div class="new-product-name">Apple Watch 4</div>
              <div class="new-product-price">$890</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="component-new-product d-block">
              <div class="new-product-thumbnail">
                <div class="new-product-image" style="background-image: url('{{url('template/images/bogotta.jpg')}}');"></div>
              </div>
              <div class="new-product-name">Orange Bogotta</div>
              <div class="new-product-price">$94,501</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="component-new-product d-block">
              <div class="new-product-thumbnail">
                <div class="new-product-image" style="background-image: url('{{url('template/images/sofa.jpg')}}');"></div>
              </div>
              <div class="new-product-name">Sofa Ternyaman</div>
              <div class="new-product-price">$1,300</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="component-new-product d-block">
              <div class="new-product-thumbnail">
                <div class="new-product-image" style="background-image: url('{{url('template/images/bubuk.jpg')}}');"></div>
              </div>
              <div class="new-product-name">Bubuk Maketti</div>
              <div class="new-product-price">$890</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <a href="#" class="component-new-product d-block">
              <div class="new-product-thumbnail">
                <div class="new-product-image" style="background-image: url('{{url('template/images/tatakan.jpg')}}');"></div>
              </div>
              <div class="new-product-name">Tatakan Gelas</div>
              <div class="new-product-price">$890</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <a href="#" class="component-new-product d-block">
              <div class="new-product-thumbnail">
                <div class="new-product-image" style="background-image: url('{{url('template/images/mavic.jpg')}}');"></div>
              </div>
              <div class="new-product-name">Mavic Pro</div>
              <div class="new-product-price">$890</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
            <a href="#" class="component-new-product d-block">
              <div class="new-product-thumbnail">
                <div class="new-product-image" style="background-image: url('{{url('template/images/nike.jpg')}}');"></div>
              </div>
              <div class="new-product-name">Black Edition Nike</div>
              <div class="new-product-price">$890</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
            <a href="#" class="component-new-product d-block">
              <div class="new-product-thumbnail">
                <div class="new-product-image" style="background-image: url('{{url('template/images/toys.jpg')}}');"></div>
              </div>
              <div class="new-product-name">Monkey Toys</div>
              <div class="new-product-price">$890</div>
            </a>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection