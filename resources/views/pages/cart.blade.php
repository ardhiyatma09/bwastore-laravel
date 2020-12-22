@extends('layouts.app')

@section('title')
    Store Cart
@endsection

@section('page-content')
<div class="page-content page-cart">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="">Home</a>
                </li>
                <li class="breadcrumb-item active">
                  Cart
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <section class="store-cart">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 table-responsive">
            <table class="table table-borderless table-cart">
              <thead>
                <tr>
                  <th  scope="col">Image</th>
                  <th  scope="col">Name &amp; Seller</th>
                  <th  scope="col">Price</th>
                  <th  scope="col">Menu</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $total_price = 0;
                @endphp
                @forelse ($carts as $cart)
                <tr>
                  <td style="width: 25%;">
                    <img src="{{Storage::url($cart->product->galleries->first()->photos)}}" class="cart-image" alt="">
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">{{$cart->product->name}}</div>
                    <div class="product-subtitle">by {{$cart->product->user->store_name}}</div>
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">Rp. {{number_format($cart->product->price)}}</div>
                    <div class="product-subtitle">Indonesia Rupiah</div>
                  </td>
                  <td style="width: 20%;">
                    <form action="{{route('delete-cart', $cart->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-remove-cart">X</button>
                    </form>
                  </td>
                </tr>
                @php
                    $total_price += $cart->product->price
                @endphp
                @empty 
                <tr>
                  <h1>NOT HAVE CART</h1>
                </tr> 
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr>
          </div>
          <div class="col-12">
            <h2 class="mb-4">Shopping Details</h2>
          </div>
        </div>
        <form action="" method="post" id="locations">
          <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
            <div class="col-md-6">
              <div class="form-group">
                <label for="address_one">Address 1</label>
                <input type="text" id="address_one" name="address_one" value="Setra Duta Cemara" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="address_two">Address 2</label>
                <input type="text" id="address_two" name="address_two" value="Blok B2 No. 34" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="provinces_id">Province</label>
                <select name="provinces_id" id="provinces_id" class="form-control" v-if="provinces" v-model="provinces_id">
                  <option v-for="province in provinces" :value="province.id">@{{province.name}}</option>
                </select>
                <select v-else class="form-control"></select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="regencies_id">City</label>
                <select name="regencies_id" id="regencies_id" class="form-control" v-if="regencies" v-model="regencies_id">
                  <option v-for="regency in regencies" :value="regency.id">@{{regency.name}}</option>
                </select>
                <select v-else class="form-control"></select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="zip_code">Postal Code</label>
                <input type="number" id="zip_code" name="zip_code" value="40512" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="country">Country</label>
                <input type="text" id="country" name="country" value="Indonesia" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="phone_number">Mobile</label>
                <input type="text" id="phone_number" name="phone_number" value="+628 2020 11111" class="form-control">
              </div>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr>
            </div>
            <div class="col-12">
              <h2 class="mb-2">Payment Informations</h2>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-4 col-md-2">
              <div class="product-title">Rp. 0</div>
              <div class="product-subtitle">Country Tax</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-title">Rp. 0</div>
              <div class="product-subtitle">Product Insurance</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title">Rp. 0</div>
              <div class="product-subtitle">Ship to Jakarta</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title text-success">Rp. {{number_format($total_price ?? 0)}}</div>
              <div class="product-subtitle">Total</div>
            </div>
            <div class="col-8 col-md-3">
              <button type="submit" class="btn btn-success mt-4 px-4 btn-block">
                Checkout Now
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>
</div>
@endsection

@push('addon-script')
<script src="{{url('template/vendor/vue/vue.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  let locations = new Vue({
    el: "#locations",
    mounted() {
      AOS.init();
      this.getProvincesData();
    },
    data: {
      provinces : null,
      regencies : null,
      provinces_id : null,
      regencies_id : null
    },
    methods: {
      getProvincesData(){
        var self = this;
        axios.get('{{route('api-provinces')}}')
          .then(function(response) {
            self.provinces = response.data;
          })
      },
      getRegenciesData(){
        var self = this;
        axios.get('{{url('api/regencies')}}/' + self.provinces_id)
          .then(function(response) {
            self.regencies = response.data;
          })
      },
    },
    watch:{
      provinces_id: function(val, oldVal){
        this.regencies_id = null;
        this.getRegenciesData();
      }
    }
  })
</script>
@endpush